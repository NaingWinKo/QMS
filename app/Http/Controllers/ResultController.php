<?php

namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Option;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTestRequest;
use App\Models\QuestionResult;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Response;
class ResultController extends Controller
{
    public function store(Request $request)
    {

        $selectedOptionIds = array_values($request->input('questions'));
        $options = Option::whereIn('id', $selectedOptionIds)->get();
        $category_id = $request->input('category_id');
        $totalPoints = $options->sum('points');
        $user_id = Auth::user()->id;
        $result = Result::create([
            'user_id' => $user_id,
            'category_id' => $category_id,
            'total_points' => $totalPoints,
            'selected_options' => json_encode($selectedOptionIds)
        ]);

        return redirect()->route('client.results.show', $result->id);
    }
    public function show($id)
    {
        $result = Result::findOrFail($id);

        // Assuming selected_options is stored as a JSON-encoded array of selected option IDs
        $selectedOptions = json_decode($result->selected_options, true);

        // Retrieve all questions and their options associated with the category
        $questions = $result->category->questions()->with('options')->get();

        // Pass the questions and selected options to the view
        return view('ui.resultshow', compact('result', 'selectedOptions', 'questions'));
    }


    //ScoreListToAdminDashboard
    public function scoreList(){
        $scores=Result::with(['user','category'])->paginate(7);

        return view('Admin.score.index',compact('scores'));
    }
    //delete All Record From Db

    public function deleteAll(){
        Result::truncate();
        return redirect()->route('admin.index')->with('success','Successfully Delete All Score Record');
    }
    //downloadPdf
    public function downloadQuizResults($id) {

        $result = Result::with('category', 'user')->findOrFail($id);
        $name = $result->user->name;
        $points = $result->total_points;
        $category = $result->category->name;
        $selectedOptions = json_decode($result->selected_options, true);
        $pdf = Pdf::loadView('pdf.quiz_results', compact('points', 'category', 'name', 'result', 'selectedOptions'));
        return $pdf->download('quiz_results.pdf');
    }


    public function downloadQuizResultsDoc($id)
    {
        // Retrieve the result with associated category and questions including their options
        $result = Result::with('category.questions.options')->findOrFail($id);
        $name = $result->user->name;
        $points = $result->total_points;
        $category = $result->category->name;
        $selectedOptions = json_decode($result->selected_options, true);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addTitle('Quiz Results for ' . $category, 1);
        $section->addText('Name: ' . $name);
        $section->addText('Total Score is: ' . $points . ' points');

        foreach ($result->category->questions as $index => $question) {
            $section->addText(($index + 1) . '. Question: ' . $question->name);
            $section->addText('Options:');

            foreach ($question->options as $optIndex => $option) {
                $text = chr(97 + $optIndex) . ') ' . $option->answer;
                if (in_array($option->id, $selectedOptions)) {
                    $text .= ' (Your selection)';
                }
                $section->addText('   ' . $text);
            }
            $section->addTextBreak();
        }
        $filePath = storage_path('app/public/quiz_results.docx');
        $writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filePath);
        return response()->download($filePath)->deleteFileAfterSend(true);
    }


    //downloadCSV

    public function downloadQuizResultsCsv($id)
 {
     $result = Result::with('category.questions.options')->findOrFail($id);
     $name = $result->user->name;
     $points = $result->total_points;
     $category = $result->category->name;

     // Array to hold CSV data
     $csvData = [
         ['Quiz Results for', $category],
         ['Name', $name],
         ['Total Score', $points . ' points'],
         [], // Empty row for spacing
     ];

     foreach ($result->category->questions as $index => $question) {
         // Add question row
         $csvData[] = [($index + 1) . '. Question:', $question->name];
         $csvData[] = ['Options:'];

         // Add each option
         foreach ($question->options as $optIndex => $option) {
             $csvData[] = [chr(97 + $optIndex) . ')', $option->name];
         }

         // Add empty row for spacing between questions
         $csvData[] = [];
     }

     // Generate CSV content
     $csvContent = $this->arrayToCsv($csvData);

     // Output the CSV file
     $fileName = 'quiz_results.csv';
     return response($csvContent)
         ->header('Content-Type', 'text/csv')
         ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"')
         ->header('Pragma', 'no-cache')
         ->header('Expires', '0');
 }

 private function arrayToCsv($array)
 {
     $output = fopen('php://temp', 'r+');
     foreach ($array as $row) {
         fputcsv($output, $row);
     }
     rewind($output);
     return stream_get_contents($output);
 }


 //privateFunction



}
