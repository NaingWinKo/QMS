<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Quiz Results for {{ $category ?? 'Unknown Category' }}</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>{{ $name ?? 'Anonymous' }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Points</td>
                <td>{{ $points ?? '0' }}</td>
            </tr>
        </tbody>
    </table>
    <h5>All Questions You Submitted:</h5>
    @if(isset($result->category->questions))
        @foreach ($result->category->questions as $q)
            <p>{{ $loop->iteration }}. {{ $q->name }}</p>
            <ul>
                @php
                    $correct = null;
                    $correctnum = null;
                @endphp
                @foreach ($q->options as $o)
                    <li>
                        {{ $loop->iteration }}. {{ $o->answer }}

                        @if (in_array($o->id, $selectedOptions))
                            <strong style="color: blue;">(Your selection)</strong>
                        @endif

                        @if ($o->points === 1)
                            @php
                                $correct = $o->answer;
                                $correctnum = $loop->iteration;
                            @endphp
                        @endif
                    </li>
                @endforeach
                <p style="color: rgb(13, 14, 13)">
                    <b>The correct answer is No {{ $correctnum }}. {{ $correct }}</b>
                </p>
            </ul>
        @endforeach
    @else
        <p>No questions available.</p>
    @endif
</body>
</html>
