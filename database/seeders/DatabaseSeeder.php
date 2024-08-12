<?php

namespace Database\Seeders;

use App\Models\Noti;
use App\Models\Post;
use App\Models\User;
use App\Models\Option;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Phyo Min',
            'email' => 'phyomin@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Soe Zayar Kyaw',
            'email' => 'soezayarkyaw@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Kyaw Kyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Hla Hla',
            'email' => 'hla@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Soe Soe',
            'email' => 'soesoe@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Aung Kaung Myat',
            'email' => 'aungkaungmyat@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Zin Min Htut',
            'email' => 'zinminhtut@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Kyaw Zin Aung',
            'email' => 'kyawzinaung@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Ye Myat Aung',
            'email' => 'yemyataung@gmail.com',
            'password' => bcrypt('naingwinko'),
            'role' => 'user'
        ]);
        $c1 = Category::create(['name' => 'Laravel']);
        $c2 = Category::create(['name' => 'PHP']);
        $c3 = Category::create(['name' => 'Bootstrap']);
        $c4 = Category::create(['name' => 'HTML']);
        $c5 = Category::create(['name' => 'CSS']);
        $c6 = Category::create(['name' => 'Javascript']);
        $c7 = Category::create(['name' => 'C#']);
        $c8 = Category::create(['name' => 'java']);
        $c9 = Category::create(['name' => 'Python']);
        $c10 = Category::create(['name' => 'Information Security']);
        $c11 = Category::create(['name' => 'Software Engineering']);
        $c12= Category::create(['name' => 'Computer Hardware']);
        $c13 = Category::create(['name' => 'Networking']);
        $c14 = Category::create(['name' => 'Ethical Hacking']);
        $c16 = Category::create(['name' => 'Binary System']);

        Post::create(['user_id'=>'1','title' =>  'What is normalization in DBMS?', 'description' => 'Normalization in DBMS is the process of organizing data in a database to minimize redundancy and ensure data integrity. It involves structuring the database into tables according to specific rules called normal forms, which progressively eliminate redundancy and dependency issues. This process enhances data consistency, reduces storage space, and simplifies database maintenance, though excessive normalization can sometimes lead to complex queries and slower performance.']);


        Post::create(['user_id'=>'1','title' =>  'APIဆိုတာဘာလဲ', 'description' => 'Application Programming Interface ဖြစ်ပါတယ်။ နားလည်ရလွယ်အောင်ပြောရရင် စားသောက်ဆိုင်မှာ ထမင်းစားတဲ့အခါ စားသောက်ဆိုင်က စားသုံးသူတွေအတွက်ထုတ်ပေးထားတဲ့ Menu interface ဆိုတာရှိပါတယ်။ ကြက်သားဟင်း၊ ငါးဟင်းစသည်ဖြင့် Interface ကိုကောင်းအောင်ထုတ်ပေးနိုင်တဲ့ အဆင့်မြင့်တဲ့ ထမင်းဆိုင်တွေဆို description ဆိုတာလေးပါ ရှိပါတယ်၊ ကြက်သားဟင်းကို ဘာတွေနဲ့ဘယ်လိုချက်ထားတယ်စသည်ဖြင့်ပါရှိပါတယ်။ ဒီသဘောကို Programming မှာဆက်စပ်ပြရမယ်ဆိုရင် ကျနော်တို့အခုသုံးနေတဲ့ Programming Language တွေမှာ conditional statement စစ်တာတို့ looping ပတ်တာတို့သည် Language ထုတ်ပေးထားတဲ့ API တွေကိုခေါ်သုံးနေတာပဲဖြစ်ပါတယ်။ နောက်ဥပမာတစ်ခုပြရမယ်ဆို ကျနော်တို့ Website or Application ထဲမှာ Google mapကို ထည့်ထားမယ်ဆိုလျှင် ဒါသည် Google Map API ကိုလှမ်းသုံးထားတာပဲဖြစ်ပါတယ်။ API ကိုအသေးစိတ်ထပ်ရှင်းရမယ်ဆို ပိုကျယ်ပြန့်ပေမယ့် ဒီဆောင်းပါးမှာတော့ ဒီလောက်ပဲ သိရင်ရပါပြီ။ အဓိကကတော့ API ဆိုတာ services တွေကြားမှာ အချင်းချင်းချိတ်ဆက်ပြီး အလုပ်လုပ်နိုင်အောင် ဖန်တီးပေးထားတဲ့အရာလို့သတ်မှတ်ထားလို့ရပါတယ်။']);

        Post::create(['user_id'=>'1','title' =>  'PHP ဆိုတာဘာလဲ ', 'description' => 'PHP အရှည်ကောက်က Personal Home Pages ဖြစ်ပါတယ်
                        အခုနောက်ပိုင်းတော့ Php Hypertext Pre-processor ဖြစ်လာပါတယ် PHP ကိုstatic website တွေ ကိုdynamic website တွေ အဖြစ်ရေးသားရာမှာအသုံးပြုပါတယ်
                        website တွေရဲ့ 78.9% နီးပါးဟာ PHP ကို server-side language အနေနဲ့အသုံးပြုထားကြပါတယ်  PHP က သင်ရတာ လွယ်တဲ့အပြင် အခမဲ့အသုံးပြုခွင့်ရှိတဲ့ Open-source License နဲ့ Programming Language တစ်ခုလဲ ဖြစ်ပါတယ်။ Open-source ဆိုတဲ့သဘောက PHP ဘယ်လိုရေးထားလဲဆိုတဲ့ code တွေကို အလွယ်တကူ ဖတ်ရှုနိုင်ပြီး ရေးသားနိုင်ပါတယ်။ Bug တွေပြင်နိုင်ပါတယ်။ Community Support (Forum, Troubleshooting, Documentation) လဲ ကျယ်ပြန့်ပါတယ်။']);


    Post::create(['user_id'=>'1','title' =>  'Laravel  ဆိုတာဘာလဲ', 'description' => 'Laravel ဆိုတာကတော့ PHP နဲ့ရေးသားဖန်တီးထားတဲ့ Open source MVC Framework တစ်ခုဖြစ်ပါတယ်။  ပထမဆုံးသိထားရမှာက Laravel PHP Framework ကိုမလေ့လာခင် HTML/CSS/JS အခြေခံနှင့် PHP/OOP သိရမှာဖြစ်ပါတယ်။ ဒါတွေသိပြီဆိုရင် ပထမဆုံး Laravel Docs ကိုသေချာဖတ်ပြီးလေ့လာသင့်ပါတယ်။ ပြီးရင် Laracasts ရဲ့ Laravel Fundamental Series ကိုလိုက်လုပ်သင့်ပါတယ်။  Laravel က MVC ဆိုတဲ့ design pattern ကိုအသုံးပြုထားပြီး MVC ဆိုတာက Model View Controller ကိုဆိုလိုပါတယ်။']);
    Post::create(['user_id'=>'1','title' =>  'Model View Controller', 'description' => 'MVC ဆိုတာ Model View Controller  ဖြစ်ပါတယ်။MVC ဆိုတာ တကယ်တန်းတော့ framework နဲ့ သက်ဆိုင်တာ မဟုတ်တဲ့ architectural pattern တစ်ခုပါ။  ပုံမှန် သမာရိုးကျ Web app တွေမှာ controller ရဲ့ အရေးပါပုံ မသိသာ ပေမယ့် routing address တွေ များလာတဲ့ အခါမှာ controller နဲ့ model ချိတ်ဆက်တာ အရမ်းအရေးပါလာပါတယ်။ သာမာန် Web App တွေမှာ GET နဲ့ POST ကိုပဲ အဓိကသုံးပေမယ့် RESTful မှာတော့ GET , POST , PUT , DELETE ကို အသုံးပြုကြပါတယ်။ Controller အနေနဲ့ GET နဲ့ ဒီ လိပ်စာလာရင် ဒီ model ကို ခေါ်ပြီး ဒါကို လုပ်။ POST ဆိုရင်တော့ ဒါကို လုပ်ဆိုပြီး ခွဲခြမ်း စိတ်ဖြာပေးပြီး ရလာတဲ့ result တွေကို View နဲ့ ပြန်ထုတ်ပြပါတယ်။  PHP ကို ဘာ framework မှ မပါပဲ ကိုယ့်ဘာသာကိုယ် MVC pattern အနေနဲ့ ရေးလို့ရပါတယ်။ web ပိုင်းမှာမှ မဟုတ်ပဲ Desktop Application တွေမှာလည်း MVC ကို အသုံးပြုနိုင်ပါတယ်။ IOS development မှာလည်း MVC ကို အသုံးပြုနိုင်ပါတယ်။']);
    Post::create(['user_id'=>'1','title' =>  'Git & GitHub', 'description' => 'Git ဆိုတာ Project တစ်ခုမှာ ရေးသားထားတဲ့ Source Code တွေကို စိစစ်တည်းဖြတ်တဲ့အလုပ်ကို လုပ်နိုင်တဲ့ Software စနစ်တစ်ခုပဲ ဖြစ်ပါတယ်။ Version Control System (VCS) လို့လည်းခေါ်ကြတယ်။ Development Team တစ်ခုမှာ Software တွေကို Develop လုပ်ကြတဲ့အခါ၊ ဘယ် Developer တွေက Source Code ကို ဘယ်လိုတွေရေးခဲ့တယ်၊ Logic တွေမှားနေလား၊ မလိုအပ်တာတွေပါနေလား၊ Code Standard နှင့် ကိုက်ညီမှုရှိရဲ့လား၊ မရှိဘူးလား စတာတွေကို Git ကနေပြန်ကြည့်ပြီး Source Code တွေကို စိစစ်နိုင်တယ်၊ တည်းဖြတ်နိုင်ပါတယ်။ Developer တစ်ယောက်ရေးထားတဲ့ Code နှင့် အခြား Developer တစ်ယောက်ရေးထားတဲ့ Code တွေကို ပေါင်းစည်းတဲ့အလုပ်ကိုလဲ လုပ်နိုင်ပါတယ်။ Developer တစ်ယောက်ရေးထားတဲ့ Code အချို့က အခြား Developer တစ်ယောက်အတွက် အသုံးဝင်နေခဲ့မယ်၊ ဒါမှမဟုတ် အခြား Project တစ်ခုအတွက် အသုံးဝင်နေခဲ့မယ်ဆိုရင် အဲ့ဒီ Code အချို့ကို လိုအပ်တဲ့နေရာအတွက် ရွေးချယ်၊ ပေါင်းထည့်နိုင်တဲ့အလုပ် (Cherry Pick) လုပ်နိုင်တယ်။  GitHub ဆိုတာ Git Repository တွေကို Hosting လုပ်ပေးတဲ့ Website တစ်ခုဖြစ်ပြီး၊ Repository တွေကို Management လုပ်တဲ့စနစ်တစ်ခုဖြစ်ပါတယ်။ Open Source (သို့) Public Project တွေအတွက် Code Hosting ကို Free အသုံးပြုနိုင်ပြီး၊ Private Project တွေအတွက်ကိုတော့ အနည်းဆုံး ၁လကို ၇ဒေါ်လာမှ စပြီးပေးချေရပါတယ်။  GitHub ထဲက အခြားသူတွေရဲ့ Open Source Project တွေမှာ Register လုပ်ပြီး ပါဝင်ကူညီ အားဖြည့်ပေးနိုင်ပါတယ်။  GitHub မှာ GitHub Desktop ဆိုတာရှိပါတယ်။  အဲ့ဒီ GitHub Desktop က အသုံးပြုတဲ့အခါ လွယ်ကူတဲ့ Git GUI Client တစ်ခုဖြစ်ပါတယ်။']);
    Post::create(['user_id'=>'1','title' =>  'Framework ဆိုတာဘာလဲ?', 'description' => ' Framework ဆိုတာ က တော့ ဘာနဲ့ တူလဲဆိုရင် အသင့် ပြင်ဆင်ပြီးသား ပစ္စည်းအပြည့်အစုံ ထည့်ပေးထားတဲ့ အိမ်ကို ငှါးလိုက်တာနဲ့ တူပါတယ်။ ကိုယ်လိုအပ်မယ် ထင်တဲ့ ပစ္စည်းတွေကို အိမ်ရှင်ကအဆင်သင့် ထည့်ပေးထားတာမျိုးဖြစ်ပါတယ်။

                        Framework ဆိုတာ လည်း အဲ့လိုသဘောတရားအတိုင်းပါဘဲ ။ ကိုယ့်ရဲ့ Project တစ်ခုလုံးအတွက် လိုအပ်သမျှ Packageတွေ အကုန်လုံးကို စုထည့်ပေးထားတာမျိုးပေါ့။ Development အတွက် လိုအပ်တဲ့ Function တွေကိုစုပြီး development processကိုလုပ်နိုင်အောင် ပြုလုပ်ပေးထားတာဖြစ်ပါတယ်။']);
    Post::create(['user_id'=>'1','title' =>  'Library ဆိုတာဘာလဲ? ', 'description' => 'မိတ်ဆွေက အိမ်ငှားတယ် ဆိုကြပါစို့။ မိတ်ဆွေက နေဖို့ရာနေရာ တစ်ခုထဲဆိုတဲ့ လိုအပ်ချက်အတွက်နဲ့ အိမ်ငှါးလိုက်တာမျိုးနဲ့ တူပါတယ်။မိတ်ဆွေကို အိမ်ရှင်ကနေဖို့ရာ အတွက်ကိုဘဲ အဓိက ဖြေရှင်းပေးလိုက်တာ။ကျန်တဲ့အသုံးအဆောင် လိုအပ်တဲ့ ပစ္စည်းမှန်သမျှကို မိတ်ဆွေတို့ စိတ်တိုင်းကျ ထည့်သုံးချင်လဲရတယ်။မသုံးချင်လဲရပါတယ် ။

                        Library ဆိုတာလည်းအဲလိုသဘောတရား အတိုင်းပါ။

                        Library ဆိုတာက functionality တွေ သို့မဟုတ် problem တွေအတွက် တခြားသူတစ်ယောက်က ဖြေရှင်းပြီးသားcodeတွေ၊ ready to use ဖြစ်နေတဲ့ program တွေကိုပြောတာပါ။']);




        $q1 =   Question::create(['name' => 'Laravel ကို ဘာအတွက် အဓိကသုံးတာလဲ?', 'category_id' => $c1->id]);
        $q2 = Question::create(['name' => 'အောက်ဖော်ပြပါအရာများထဲမှ မည်သည့်အရာသည် ဒေတာဘေ့စ်မေးမြန်းချက်များကို ရိုးရှင်းလွယ်ကူစေသည့် Laravel အင်္ဂါရပ်တစ်ခုဖြစ်သနည်း', 'category_id' => $c1->id]);
        $q3 =  Question::create(['name' => 'Laravel တွင် controller အသစ်တစ်ခုဖန်တီးရန် မည်သည့် command ကိုအသုံးပြုသနည်?', 'category_id' => $c1->id]);

        $q4 =  Question::create(['name' => 'အောက်ပါတို့ထဲမှ မည်သည့်နည်းသည် PHP တွင် variable တစ်ခုကိုကြေငြာရန်နည်းလမ်းဖြစ်သနည်း?', 'category_id' => $c2->id]);
        $q5 =  Question::create(['name' => 'Which function in PHP is used to include the content of one PHP file into another PHP file?', 'category_id' => $c2->id]);
        $q6 =  Question::create(['name' => 'PHP ဖိုင်များအတွက် မူရင်းဖိုင် extension ကဘာလဲ?', 'category_id' => $c2->id]);

        $q7 =   Question::create(['name' => 'Bootstrap က ဘာအတွက် အဓိကသုံးတာလဲ။', 'category_id' => $c3->id]);
        $q8 =  Question::create(['name' => 'Which class in Bootstrap is used to create a responsive grid system?', 'category_id' => $c3->id]);
        $q9 =  Question::create(['name' => 'NavBarတစ်ခုဖန်တီးရန် မည်သည့် Bootstrap အစိတ်အပိုင်းကို အသုံးပြုသနည်း။', 'category_id' => $c3->id]);

        $q10 = Question::create(['name' => 'HTML ဆိုသည်မှာ ဘာကို ရည်ညွှန်းသလဲ?', 'category_id' => $c4->id]);
        $q11 = Question::create(['name' => 'HTML မှာ element တစ်ခုရဲ့ attribute အလုပ်လုပ်ပုံကို ရှင်းပြပါ။', 'category_id' => $c4->id]);
        $q12 = Question::create(['name' => 'HTML မှာ form ကို မည်သို့ ဖန်တီးသလဲ?', 'category_id' => $c4->id]);

        $q13 = Question::create(['name' => 'CSS ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c5->id]);
        $q14 = Question::create(['name' => 'CSS မှာ class selector နဲ့ id selector အကြား ကွာခြားချက်ကို ရှင်းပြပါ။', 'category_id' => $c5->id]);
        $q15 = Question::create(['name' => 'CSS မှာ box model ဆိုတာ ဘာလဲ?', 'category_id' => $c5->id]);

        $q16 = Question::create(['name' => 'JavaScript ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c6->id]);
        $q17 = Question::create(['name' => 'JavaScript မှာ variable တစ်ခုဖန်တီးရန် မည်သည့် keyword များကိုအသုံးပြုသနည်း?', 'category_id' => $c6->id]);
        $q18 = Question::create(['name' => 'JavaScript မှာ function တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c6->id]);

        $q19 = Question::create(['name' => 'C# ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c7->id]);
        $q20 = Question::create(['name' => 'C# မှာ class တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c7->id]);
        $q21 = Question::create(['name' => 'C# မှာ interface နဲ့ abstract class အကြား ကွာခြားချက်ကို ရှင်းပြပါ။', 'category_id' => $c7->id]);

        $q22 = Question::create(['name' => 'Java ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c8->id]);
        $q23 = Question::create(['name' => 'Java မှာ class တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c8->id]);
        $q24 = Question::create(['name' => 'Java မှာ exception handling ကို မည်သို့ ပြုလုပ်သနည်း?', 'category_id' => $c8->id]);

        $q25 = Question::create(['name' => 'Python ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c9->id]);
        $q26 = Question::create(['name' => 'Python မှာ function တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c9->id]);
        $q27 = Question::create(['name' => 'Python မှာ list comprehension ကို မည်သို့အသုံးပြုသနည်း?', 'category_id' => $c9->id]);

        Option::create(['answer' => 'Building mobile applications', 'points' => '0', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Creating desktop software', 'points' => '1', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Developing web applications', 'points' => '0', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Designing graphic interfaces', 'points' => '0', 'question_id' => $q1->id]);

        Option::create(['answer' => 'Eloquent ORM', 'points' => '0', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Blade templating', 'points' => '0', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Middleware', 'points' => '1', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Artisan', 'points' => '0', 'question_id' => $q2->id]);

        Option::create(['answer' => ' php artisan make', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => 'php new', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => ' artisan create', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => ' composer create-controller', 'points' => '1', 'question_id' => $q3->id]);

        Option::create(['answer' => ' var $variable_name;', 'points' => '1', 'question_id' => $q4->id]);
        Option::create(['answer' => '$variable_name;', 'points' => '0', 'question_id' => $q4->id]);
        Option::create(['answer' => ' variable $variable_name;', 'points' => '0', 'question_id' => $q4->id]);
        Option::create(['answer' => ' declare $variable_name;', 'points' => '0', 'question_id' => $q4->id]);

        Option::create(['answer' => 'require()', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => ' import();', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => ' include();', 'points' => '1', 'question_id' => $q5->id]);
        Option::create(['answer' => 'load();', 'points' => '0', 'question_id' => $q5->id]);

        Option::create(['answer' => '.html', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => '.php', 'points' => '1', 'question_id' => $q5->id]);
        Option::create(['answer' => ' .js', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => '.css;', 'points' => '0', 'question_id' => $q5->id]);

        Option::create(['answer' => '.html', 'points' => '0', 'question_id' => $q6->id]);
        Option::create(['answer' => '.php', 'points' => '0', 'question_id' => $q6->id]);
        Option::create(['answer' => ' .js', 'points' => '1', 'question_id' => $q6->id]);
        Option::create(['answer' => '.css;', 'points' => '0', 'question_id' => $q6->id]);

        Option::create(['answer' => ' Developing mobile applications', 'points' => '0', 'question_id' => $q7->id]);
        Option::create(['answer' => ' Managing databases', 'points' => '0', 'question_id' => $q7->id]);
        Option::create(['answer' => 'Creating responsive web designs', 'points' => '1', 'question_id' => $q7->id]);
        Option::create(['answer' => 'Writing server-side scripts', 'points' => '0', 'question_id' => $q7->id]);

        Option::create(['answer' => 'grid-responsive', 'points' => '0', 'question_id' => $q8->id]);
        Option::create(['answer' => 'container-grid', 'points' => '0', 'question_id' => $q8->id]);
        Option::create(['answer' => 'row', 'points' => '1', 'question_id' => $q8->id]);
        Option::create(['answer' => 'grid-system', 'points' => '0', 'question_id' => $q8->id]);

        Option::create(['answer' => 'navbar', 'points' => '1', 'question_id' => $q9->id]);
        Option::create(['answer' => 'nav', 'points' => '0', 'question_id' => $q9->id]);
        Option::create(['answer' => 'navigation', 'points' => '0', 'question_id' => $q9->id]);
        Option::create(['answer' => 'nav-bar', 'points' => '0', 'question_id' => $q9->id]);

        Option::create(['answer' => 'HyperText Markup Language', 'points' => '1', 'question_id' => $q10->id]);
        Option::create(['answer' => 'HyperText Markdown Language', 'points' => '0', 'question_id' => $q10->id]);
        Option::create(['answer' => 'Home Tool Markup Language', 'points' => '0', 'question_id' => $q10->id]);
        Option::create(['answer' => 'Hyperlink and Text Markup Language', 'points' => '0', 'question_id' => $q10->id]);

        Option::create(['answer' => 'Attributes provide additional information about an element', 'points' => '1', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are used to style an element', 'points' => '0', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are only used in HTML forms', 'points' => '0', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are used to link external CSS files', 'points' => '0', 'question_id' => $q11->id]);

        Option::create(['answer' => '<form>', 'points' => '1', 'question_id' => $q12->id]);
        Option::create(['answer' => '<input>', 'points' => '0', 'question_id' => $q12->id]);
        Option::create(['answer' => '<forminput>', 'points' => '0', 'question_id' => $q12->id]);
        Option::create(['answer' => '<formelement>', 'points' => '0', 'question_id' => $q12->id]);

        Option::create(['answer' => 'CSS is used for designing web pages', 'points' => '1', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is a programming language', 'points' => '0', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is used for server-side scripting', 'points' => '0', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is used to create databases', 'points' => '0', 'question_id' => $q13->id]);

        Option::create(['answer' => 'Class selectors are defined with a dot (.), ID selectors are defined with a hash (#)', 'points' => '1', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Class selectors are defined with a hash (#), ID selectors are defined with a dot (.)', 'points' => '0', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Both are defined with a dot (.)', 'points' => '0', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Both are defined with a hash (#)', 'points' => '0', 'question_id' => $q14->id]);

        Option::create(['answer' => 'The box model consists of margins, borders, padding, and the actual content', 'points' => '1', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is used to display flex and grid layouts', 'points' => '0', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is a method to create rounded corners in CSS', 'points' => '0', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is a way to center content horizontally and vertically', 'points' => '0', 'question_id' => $q15->id]);

        Option::create(['answer' => 'JavaScript is used to create interactive web pages', 'points' => '1', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is used to style web pages', 'points' => '0', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is a server-side language', 'points' => '0', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is used to manage databases', 'points' => '0', 'question_id' => $q16->id]);

        Option::create(['answer' => 'var, let, and const', 'points' => '1', 'question_id' => $q17->id]);
        Option::create(['answer' => 'let, set, and const', 'points' => '0', 'question_id' => $q17->id]);
        Option::create(['answer' => 'var, set, and const', 'points' => '0', 'question_id' => $q17->id]);
        Option::create(['answer' => 'var, let, and define', 'points' => '0', 'question_id' => $q17->id]);

        Option::create(['answer' => 'function myFunction() { }', 'points' => '1', 'question_id' => $q18->id]);
        Option::create(['answer' => 'def myFunction() { }', 'points' => '0', 'question_id' => $q18->id]);
        Option::create(['answer' => 'function: myFunction() { }', 'points' => '0', 'question_id' => $q18->id]);
        Option::create(['answer' => 'myFunction function() { }', 'points' => '0', 'question_id' => $q18->id]);

        Option::create(['answer' => 'C# is used for developing Windows applications and games', 'points' => '1', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is used for web development only', 'points' => '0', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is a variant of C++', 'points' => '0', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is used for managing databases', 'points' => '0', 'question_id' => $q19->id]);

        Option::create(['answer' => 'public class MyClass { }', 'points' => '1', 'question_id' => $q20->id]);
        Option::create(['answer' => 'class MyClass { }', 'points' => '0', 'question_id' => $q20->id]);
        Option::create(['answer' => 'public MyClass class { }', 'points' => '0', 'question_id' => $q20->id]);
        Option::create(['answer' => 'MyClass public class { }', 'points' => '0', 'question_id' => $q20->id]);

        Option::create(['answer' => 'An interface can only contain declarations, an abstract class can contain both declarations and implementations', 'points' => '1', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An abstract class can only contain declarations, an interface can contain both declarations and implementations', 'points' => '0', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An interface and an abstract class are the same', 'points' => '0', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An abstract class is a type of interface', 'points' => '0', 'question_id' => $q21->id]);

        Option::create(['answer' => 'Java is used for developing web applications, desktop applications, and mobile applications', 'points' => '1', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is used for database management only', 'points' => '0', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is used for styling web pages', 'points' => '0', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is a variant of JavaScript', 'points' => '0', 'question_id' => $q22->id]);

        Option::create(['answer' => 'public class MyClass { }', 'points' => '1', 'question_id' => $q23->id]);
        Option::create(['answer' => 'class MyClass { }', 'points' => '0', 'question_id' => $q23->id]);
        Option::create(['answer' => 'public MyClass class { }', 'points' => '0', 'question_id' => $q23->id]);
        Option::create(['answer' => 'MyClass public class { }', 'points' => '0', 'question_id' => $q23->id]);

        Option::create(['answer' => 'try { } catch(Exception e) { }', 'points' => '1', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } except(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } finally(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } else(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);

        Option::create(['answer' => 'Python is used for web development, data analysis, machine learning, and more', 'points' => '1', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is used only for web development', 'points' => '0', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is a database management system', 'points' => '0', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is used only for scripting in Linux', 'points' => '0', 'question_id' => $q25->id]);

        Option::create(['answer' => 'def my_function():', 'points' => '1', 'question_id' => $q26->id]);
        Option::create(['answer' => 'function my_function():', 'points' => '0', 'question_id' => $q26->id]);
        Option::create(['answer' => 'my_function() {}', 'points' => '0', 'question_id' => $q26->id]);
        Option::create(['answer' => 'def my_function() {}', 'points' => '0', 'question_id' => $q26->id]);

        Option::create(['answer' => '[x for x in iterable]', 'points' => '1', 'question_id' => $q27->id]);
        Option::create(['answer' => '{x for x in iterable}', 'points' => '0', 'question_id' => $q27->id]);
        Option::create(['answer' => '(x for x in iterable)', 'points' => '0', 'question_id' => $q27->id]);
        Option::create(['answer' => '[x, y in iterable]', 'points' => '0', 'question_id' => $q27->id]);

        $q28 = Question::create(['name' => 'What does HTML stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'HyperText Markup Language', 'points' => '1', 'question_id' => $q28->id]);
Option::create(['answer' => 'HyperText Markdown Language', 'points' => '0', 'question_id' => $q28->id]);
Option::create(['answer' => 'Home Tool Markup Language', 'points' => '0', 'question_id' => $q28->id]);
Option::create(['answer' => 'Hyperlink and Text Markup Language', 'points' => '0', 'question_id' => $q28->id]);


$q29 = Question::create(['name' => 'Which tag is used to define a hyperlink in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<a>', 'points' => '1', 'question_id' => $q29->id]);
Option::create(['answer' => '<link>', 'points' => '0', 'question_id' => $q29->id]);
Option::create(['answer' => '<href>', 'points' => '0', 'question_id' => $q29->id]);
Option::create(['answer' => '<hyperlink>', 'points' => '0', 'question_id' => $q29->id]);

$q30 = Question::create(['name' => 'Which tag is used to define an unordered list in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<ul>', 'points' => '1', 'question_id' => $q30->id]);
Option::create(['answer' => '<ol>', 'points' => '0', 'question_id' => $q30->id]);
Option::create(['answer' => '<li>', 'points' => '0', 'question_id' => $q30->id]);
Option::create(['answer' => '<list>', 'points' => '0', 'question_id' => $q30->id]);

$q31 = Question::create(['name' => 'What does the HTML tag <img> stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'Image', 'points' => '1', 'question_id' => $q31->id]);
Option::create(['answer' => 'Insert', 'points' => '0', 'question_id' => $q31->id]);
Option::create(['answer' => 'Input', 'points' => '0', 'question_id' => $q31->id]);
Option::create(['answer' => 'Imagine', 'points' => '0', 'question_id' => $q31->id]);

$q32 = Question::create(['name' => 'Which attribute is used to define inline styles in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => 'style', 'points' => '1', 'question_id' => $q32->id]);
Option::create(['answer' => 'class', 'points' => '0', 'question_id' => $q32->id]);
Option::create(['answer' => 'id', 'points' => '0', 'question_id' => $q32->id]);
Option::create(['answer' => 'font', 'points' => '0', 'question_id' => $q32->id]);
$q33 = Question::create(['name' => 'What does the HTML tag <p> stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'Paragraph', 'points' => '1', 'question_id' => $q33->id]);
Option::create(['answer' => 'Pre', 'points' => '0', 'question_id' => $q33->id]);
Option::create(['answer' => 'Post', 'points' => '0', 'question_id' => $q33->id]);
Option::create(['answer' => 'Page', 'points' => '0', 'question_id' => $q33->id]);

$q34 = Question::create(['name' => 'Which tag is used to define a table in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<table>', 'points' => '1', 'question_id' => $q34->id]);
Option::create(['answer' => '<tr>', 'points' => '0', 'question_id' => $q34->id]);
Option::create(['answer' => '<td>', 'points' => '0', 'question_id' => $q34->id]);
Option::create(['answer' => '<th>', 'points' => '0', 'question_id' => $q34->id]);

$q35 = Question::create(['name' => 'What does CSS stand for?', 'category_id' => $c5->id]);
Option::create(['answer' => 'Cascading Style Sheets', 'points' => '1', 'question_id' => $q35->id]);
Option::create(['answer' => 'Computer Style Sheets', 'points' => '0', 'question_id' => $q35->id]);
Option::create(['answer' => 'Creative Style Sheets', 'points' => '0', 'question_id' => $q35->id]);
Option::create(['answer' => 'Cascading Sheets Style', 'points' => '0', 'question_id' => $q35->id]);
$q36 = Question::create(['name' => 'Which CSS property is used to change the text color of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'color', 'points' => '1', 'question_id' => $q36->id]);
Option::create(['answer' => 'font-color', 'points' => '0', 'question_id' => $q36->id]);
Option::create(['answer' => 'text-color', 'points' => '0', 'question_id' => $q36->id]);
Option::create(['answer' => 'text-style', 'points' => '0', 'question_id' => $q36->id]);

$q37 = Question::create(['name' => 'Which CSS property is used to change the background color of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'background-color', 'points' => '1', 'question_id' => $q37->id]);
Option::create(['answer' => 'color-background', 'points' => '0', 'question_id' => $q37->id]);
Option::create(['answer' => 'bg-color', 'points' => '0', 'question_id' => $q37->id]);
Option::create(['answer' => 'background', 'points' => '0', 'question_id' => $q37->id]);

$q38 = Question::create(['name' => 'Which CSS property is used to change the font size of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'font-size', 'points' => '1', 'question_id' => $q38->id]);
Option::create(['answer' => 'size', 'points' => '0', 'question_id' => $q38->id]);
Option::create(['answer' => 'text-size', 'points' => '0', 'question_id' => $q38->id]);
Option::create(['answer' => 'font-style', 'points' => '0', 'question_id' => $q38->id]);

$q39 = Question::create(['name' => 'Which CSS property is used to make text bold?', 'category_id' => $c5->id]);
Option::create(['answer' => 'font-weight', 'points' => '1', 'question_id' => $q39->id]);
Option::create(['answer' => 'bold', 'points' => '0', 'question_id' => $q39->id]);
Option::create(['answer' => 'text-bold', 'points' => '0', 'question_id' => $q39->id]);
Option::create(['answer' => 'weight', 'points' => '0', 'question_id' => $q39->id]);

$q40 = Question::create(['name' => 'Which CSS property is used to align text to the center of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'text-align', 'points' => '1', 'question_id' => $q40->id]);
Option::create(['answer' => 'align', 'points' => '0', 'question_id' => $q40->id]);
Option::create(['answer' => 'center-align', 'points' => '0', 'question_id' => $q40->id]);
Option::create(['answer' => 'align-text', 'points' => '0', 'question_id' => $q40->id]);

$q41 = Question::create(['name' => 'Which CSS property is used to add space between letters?', 'category_id' => $c5->id]);
Option::create(['answer' => 'letter-spacing', 'points' => '1', 'question_id' => $q41->id]);
Option::create(['answer' => 'space-letter', 'points' => '0', 'question_id' => $q41->id]);
Option::create(['answer' => 'spacing-letter', 'points' => '0', 'question_id' => $q41->id]);
Option::create(['answer' => 'text-spacing', 'points' => '0', 'question_id' => $q41->id]);
$q42 = Question::create(['name' => 'What is JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'A scripting language', 'points' => '1', 'question_id' => $q42->id]);
Option::create(['answer' => 'A programming language', 'points' => '0', 'question_id' => $q42->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q42->id]);
Option::create(['answer' => 'A styling language', 'points' => '0', 'question_id' => $q42->id]);
$q43 = Question::create(['name' => 'Which keyword is used to declare a variable in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'var', 'points' => '1', 'question_id' => $q43->id]);
Option::create(['answer' => 'let', 'points' => '0', 'question_id' => $q43->id]);
Option::create(['answer' => 'const', 'points' => '0', 'question_id' => $q43->id]);
Option::create(['answer' => 'variable', 'points' => '0', 'question_id' => $q43->id]);

$q44 = Question::create(['name' => 'What is the correct way to write an array in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'var colors = ["red", "green", "blue"];', 'points' => '1', 'question_id' => $q44->id]);
Option::create(['answer' => 'array colors = ["red", "green", "blue"];', 'points' => '0', 'question_id' => $q44->id]);
Option::create(['answer' => 'colors = "red", "green", "blue";', 'points' => '0', 'question_id' => $q44->id]);
Option::create(['answer' => 'colors = ["red", "green", "blue"];', 'points' => '0', 'question_id' => $q44->id]);
$q45 = Question::create(['name' => 'Which operator is used for strict equality comparison in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => '===', 'points' => '1', 'question_id' => $q45->id]);
Option::create(['answer' => '==', 'points' => '0', 'question_id' => $q45->id]);
Option::create(['answer' => '=', 'points' => '0', 'question_id' => $q45->id]);
Option::create(['answer' => '!==', 'points' => '0', 'question_id' => $q45->id]);
$q46 = Question::create(['name' => 'Which built-in method returns the length of a string in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'length()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'size()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'getSize()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'length', 'points' => '1', 'question_id' => $q46->id]);
$q47 = Question::create(['name' => 'Which event occurs when the user clicks on an HTML element?', 'category_id' => $c6->id]);
Option::create(['answer' => 'onclick', 'points' => '1', 'question_id' => $q47->id]);
Option::create(['answer' => 'onmouseclick', 'points' => '0', 'question_id' => $q47->id]);
Option::create(['answer' => 'onchange', 'points' => '0', 'question_id' => $q47->id]);
Option::create(['answer' => 'onselect', 'points' => '0', 'question_id' => $q47->id]);
$q48 = Question::create(['name' => 'What is the output of `console.log(3 + "2")` in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => '32', 'points' => '1', 'question_id' => $q48->id]);
Option::create(['answer' => '5', 'points' => '0', 'question_id' => $q48->id]);
Option::create(['answer' => 'undefined', 'points' => '0', 'question_id' => $q48->id]);
Option::create(['answer' => 'error', 'points' => '0', 'question_id' => $q48->id]);
$q49 = Question::create(['name' => 'What does PHP stand for?', 'category_id' => $c2->id]);
Option::create(['answer' => 'Hypertext Preprocessor', 'points' => '1', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Processor', 'points' => '0', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Programming', 'points' => '0', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Protocol', 'points' => '0', 'question_id' => $q49->id]);
$q50 = Question::create(['name' => 'Which of the following is not a valid PHP variable name?', 'category_id' => $c2->id]);
Option::create(['answer' => '2myVar', 'points' => '1', 'question_id' => $q50->id]);
Option::create(['answer' => '_myVar', 'points' => '0', 'question_id' => $q50->id]);
Option::create(['answer' => '$myVar', 'points' => '0', 'question_id' => $q50->id]);
Option::create(['answer' => 'myVar2', 'points' => '0', 'question_id' => $q50->id]);
$q51 = Question::create(['name' => 'Which function in PHP is used to redirect the browser to a different URL?', 'category_id' => $c2->id]);
Option::create(['answer' => 'header()', 'points' => '1', 'question_id' => $q51->id]);
Option::create(['answer' => 'redirect()', 'points' => '0', 'question_id' => $q51->id]);
Option::create(['answer' => 'location()', 'points' => '0', 'question_id' => $q51->id]);
Option::create(['answer' => 'forward()', 'points' => '0', 'question_id' => $q51->id]);
$q52 = Question::create(['name' => 'How do you start a PHP session?', 'category_id' => $c2->id]);
Option::create(['answer' => 'session_start()', 'points' => '1', 'question_id' => $q52->id]);
Option::create(['answer' => 'start_session()', 'points' => '0', 'question_id' => $q52->id]);
Option::create(['answer' => 'session()', 'points' => '0', 'question_id' => $q52->id]);
Option::create(['answer' => 'init_session()', 'points' => '0', 'question_id' => $q52->id]);
$q53 = Question::create(['name' => 'Which PHP function is used to get the length of a string?', 'category_id' => $c2->id]);
Option::create(['answer' => 'strlen()', 'points' => '1', 'question_id' => $q53->id]);
Option::create(['answer' => 'length()', 'points' => '0', 'question_id' => $q53->id]);
Option::create(['answer' => 'strlength()', 'points' => '0', 'question_id' => $q53->id]);
Option::create(['answer' => 'string_length()', 'points' => '0', 'question_id' => $q53->id]);
$q54 = Question::create(['name' => 'What does the `echo` function do in PHP?', 'category_id' => $c2->id]);
Option::create(['answer' => 'Outputs one or more strings', 'points' => '1', 'question_id' => $q54->id]);
Option::create(['answer' => 'Declares a variable', 'points' => '0', 'question_id' => $q54->id]);
Option::create(['answer' => 'Starts a loop', 'points' => '0', 'question_id' => $q54->id]);
Option::create(['answer' => 'Ends a session', 'points' => '0', 'question_id' => $q54->id]);
$q55 = Question::create(['name' => 'Which operator in PHP is used to check if two values are equal and of the same data type?', 'category_id' => $c2->id]);
Option::create(['answer' => '===', 'points' => '1', 'question_id' => $q55->id]);
Option::create(['answer' => '==', 'points' => '0', 'question_id' => $q55->id]);
Option::create(['answer' => '=+', 'points' => '0', 'question_id' => $q55->id]);
Option::create(['answer' => '!=', 'points' => '0', 'question_id' => $q55->id]);
$q56 = Question::create(['name' => 'What is Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'A PHP framework', 'points' => '1', 'question_id' => $q56->id]);
Option::create(['answer' => 'A JavaScript library', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A CSS framework', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q56->id]);
$q57 = Question::create(['name' => 'Which command is used to create a new Laravel project?', 'category_id' => $c1->id]);
Option::create(['answer' => 'composer create-project laravel/laravel', 'points' => '1', 'question_id' => $q57->id]);
Option::create(['answer' => 'php artisan new laravel', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'laravel new project', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'composer require laravel/laravel', 'points' => '0', 'question_id' => $q57->id]);
$q58 = Question::create(['name' => 'Which folder contains the main configuration files of a Laravel project?', 'category_id' => $c1->id]);
Option::create(['answer' => 'config/', 'points' => '1', 'question_id' => $q58->id]);
Option::create(['answer' => 'app/', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'public/', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'resources/', 'points' => '0', 'question_id' => $q58->id]);
$q59 = Question::create(['name' => 'Which artisan command is used to create a new controller in Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'php artisan make:controller', 'points' => '1', 'question_id' => $q59->id]);
Option::create(['answer' => 'php make:controller', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'artisan make:controller', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'php new:controller', 'points' => '0', 'question_id' => $q59->id]);
$q60 = Question::create(['name' => 'What is the purpose of Laravel\'s Eloquent ORM?', 'category_id' => $c1->id]);
Option::create(['answer' => 'To interact with databases', 'points' => '1', 'question_id' => $q60->id]);
Option::create(['answer' => 'To create front-end components', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'To manage server configurations', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'To handle HTTP requests', 'points' => '0', 'question_id' => $q60->id]);
$q61 = Question::create(['name' => 'Which of the following is not a database supported by Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'MongoDB', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'MySQL', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'SQLite', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'Oracle', 'points' => '1', 'question_id' => $q61->id]);
$q62 = Question::create(['name' => 'What does CSRF protection in Laravel prevent?', 'category_id' => $c1->id]);
Option::create(['answer' => 'Cross-Site Request Forgery attacks', 'points' => '1', 'question_id' => $q62->id]);
Option::create(['answer' => 'Cross-Site Scripting attacks', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'SQL Injection attacks', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'Server-side request falsification', 'points' => '0', 'question_id' => $q62->id]);
$q56 = Question::create(['name' => 'What is C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'A programming language developed by Microsoft', 'points' => '1', 'question_id' => $q56->id]);
Option::create(['answer' => 'A JavaScript library', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q56->id]);
$q57 = Question::create(['name' => 'Which of the following is a feature of C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Object-oriented programming', 'points' => '1', 'question_id' => $q57->id]);
Option::create(['answer' => 'Functional programming', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'Procedural programming', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'Scripting language', 'points' => '0', 'question_id' => $q57->id]);
$q58 = Question::create(['name' => 'Which IDE is commonly used for C# development?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Visual Studio', 'points' => '1', 'question_id' => $q58->id]);
Option::create(['answer' => 'Eclipse', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'Atom', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'Sublime Text', 'points' => '0', 'question_id' => $q58->id]);
$q59 = Question::create(['name' => 'What does C# use to implement inheritance?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Keywords: `class` and `inherit`', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `base` and `derived`', 'points' => '1', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `super` and `extends`', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `extends` and `implements`', 'points' => '0', 'question_id' => $q59->id]);

$q60 = Question::create(['name' => 'Which of the following is not a primitive data type in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Integer', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'String', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'Array', 'points' => '1', 'question_id' => $q60->id]);
Option::create(['answer' => 'Boolean', 'points' => '0', 'question_id' => $q60->id]);
$q61 = Question::create(['name' => 'What is the correct way to declare a method in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'public void methodName()', 'points' => '1', 'question_id' => $q61->id]);
Option::create(['answer' => 'methodName(): public', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'void methodName()', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'methodName(void)', 'points' => '0', 'question_id' => $q61->id]);
$q62 = Question::create(['name' => 'What is the purpose of using `using` statement in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'To ensure that resources are properly disposed', 'points' => '1', 'question_id' => $q62->id]);
Option::create(['answer' => 'To import namespaces', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'To declare variables', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'To define classes', 'points' => '0', 'question_id' => $q62->id]);
$q63 = Question::create(['name' => 'What is Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'A programming language', 'points' => '1', 'question_id' => $q63->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q63->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q63->id]);
Option::create(['answer' => 'A scripting language', 'points' => '0', 'question_id' => $q63->id]);

$q64 = Question::create(['name' => 'Which company developed Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Sun Microsystems', 'points' => '1', 'question_id' => $q64->id]);
Option::create(['answer' => 'Microsoft', 'points' => '0', 'question_id' => $q64->id]);
Option::create(['answer' => 'Oracle', 'points' => '0', 'question_id' => $q64->id]);
Option::create(['answer' => 'IBM', 'points' => '0', 'question_id' => $q64->id]);
$q65 = Question::create(['name' => 'Which of the following statements about Java is true?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Java is platform-independent', 'points' => '1', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is a procedural language', 'points' => '0', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is primarily used for front-end development', 'points' => '0', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is obsolete', 'points' => '0', 'question_id' => $q65->id]);
$q66 = Question::create(['name' => 'Which keyword is used to define a class in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'class', 'points' => '1', 'question_id' => $q66->id]);
Option::create(['answer' => 'function', 'points' => '0', 'question_id' => $q66->id]);
Option::create(['answer' => 'void', 'points' => '0', 'question_id' => $q66->id]);
Option::create(['answer' => 'public', 'points' => '0', 'question_id' => $q66->id]);
$q67 = Question::create(['name' => 'What is the output of `System.out.println(5 + "Hello");` in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => '5Hello', 'points' => '1', 'question_id' => $q67->id]);
Option::create(['answer' => '5 Hello', 'points' => '0', 'question_id' => $q67->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q67->id]);
Option::create(['answer' => 'Compiler warning', 'points' => '0', 'question_id' => $q67->id]);
$q68 = Question::create(['name' => 'Which method is used to get user input in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Scanner.nextLine()', 'points' => '1', 'question_id' => $q68->id]);
Option::create(['answer' => 'System.in.read()', 'points' => '0', 'question_id' => $q68->id]);
Option::create(['answer' => 'Console.readLine()', 'points' => '0', 'question_id' => $q68->id]);
Option::create(['answer' => 'input()', 'points' => '0', 'question_id' => $q68->id]);

$q69 = Question::create(['name' => 'What is the default value of an integer variable in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => '0', 'points' => '1', 'question_id' => $q69->id]);
Option::create(['answer' => 'null', 'points' => '0', 'question_id' => $q69->id]);
Option::create(['answer' => 'Undefined', 'points' => '0', 'question_id' => $q69->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q69->id]);

$q70 = Question::create(['name' => 'What type of language is Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'High-level programming language', 'points' => '1', 'question_id' => $q70->id]);
Option::create(['answer' => 'Low-level programming language', 'points' => '0', 'question_id' => $q70->id]);
Option::create(['answer' => 'Assembly language', 'points' => '0', 'question_id' => $q70->id]);
Option::create(['answer' => 'Machine language', 'points' => '0', 'question_id' => $q70->id]);
$q71 = Question::create(['name' => 'Which of the following is true about Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Python code is easy to read and maintain', 'points' => '1', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is a purely functional language', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python requires compilation before execution', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is not suitable for web development', 'points' => '0', 'question_id' => $q71->id]);
$q71 = Question::create(['name' => 'Which of the following is true about Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Python code is easy to read and maintain', 'points' => '1', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is a purely functional language', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python requires compilation before execution', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is not suitable for web development', 'points' => '0', 'question_id' => $q71->id]);
$q72 = Question::create(['name' => 'Which symbol is used for comments in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => '#', 'points' => '1', 'question_id' => $q72->id]);
Option::create(['answer' => '//', 'points' => '0', 'question_id' => $q72->id]);
Option::create(['answer' => '--', 'points' => '0', 'question_id' => $q72->id]);
Option::create(['answer' => '**', 'points' => '0', 'question_id' => $q72->id]);
$q73 = Question::create(['name' => 'Which of the following data types is mutable in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'List', 'points' => '1', 'question_id' => $q73->id]);
Option::create(['answer' => 'Tuple', 'points' => '0', 'question_id' => $q73->id]);
Option::create(['answer' => 'String', 'points' => '0', 'question_id' => $q73->id]);
Option::create(['answer' => 'Set', 'points' => '0', 'question_id' => $q73->id]);
$q74 = Question::create(['name' => 'What does the `print()` function do in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Outputs text or variables to the console', 'points' => '1', 'question_id' => $q74->id]);
Option::create(['answer' => 'Executes a loop', 'points' => '0', 'question_id' => $q74->id]);
Option::create(['answer' => 'Defines a new function', 'points' => '0', 'question_id' => $q74->id]);
Option::create(['answer' => 'Imports a module', 'points' => '0', 'question_id' => $q74->id]);
$q75 = Question::create(['name' => 'What is the result of `3 + 2 * 4` in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => '11', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => '20', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => '11', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => 'The expression is invalid', 'points' => '1', 'question_id' => $q75->id]);
$q76 = Question::create(['name' => 'Which keyword is used to define a function in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'def', 'points' => '1', 'question_id' => $q76->id]);
Option::create(['answer' => 'function', 'points' => '0', 'question_id' => $q76->id]);
Option::create(['answer' => 'define', 'points' => '0', 'question_id' => $q76->id]);
Option::create(['answer' => 'func', 'points' => '0', 'question_id' => $q76->id]);

$q77 = Question::create(['name' => 'What type of language is JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Scripting language', 'points' => '1', 'question_id' => $q77->id]);
Option::create(['answer' => 'Markup language', 'points' => '0', 'question_id' => $q77->id]);
Option::create(['answer' => 'Programming language', 'points' => '0', 'question_id' => $q77->id]);
Option::create(['answer' => 'Styling language', 'points' => '0', 'question_id' => $q77->id]);
$q78 = Question::create(['name' => 'Which company developed JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Netscape Communications Corporation', 'points' => '1', 'question_id' => $q78->id]);
Option::create(['answer' => 'Microsoft', 'points' => '0', 'question_id' => $q78->id]);
Option::create(['answer' => 'Oracle Corporation', 'points' => '0', 'question_id' => $q78->id]);
Option::create(['answer' => 'Google', 'points' => '0', 'question_id' => $q78->id]);
$q79 = Question::create(['name' => 'Which of the following is true about JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'JavaScript can be used on both the client-side and server-side', 'points' => '1', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is a compiled language', 'points' => '0', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is primarily used for styling web pages', 'points' => '0', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is obsolete', 'points' => '0', 'question_id' => $q79->id]);
$q80 = Question::create(['name' => 'Which keyword is used to declare a variable in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'var', 'points' => '1', 'question_id' => $q80->id]);
Option::create(['answer' => 'int', 'points' => '0', 'question_id' => $q80->id]);
Option::create(['answer' => 'let', 'points' => '0', 'question_id' => $q80->id]);
Option::create(['answer' => 'variable', 'points' => '0', 'question_id' => $q80->id]);
$q81 = Question::create(['name' => 'What is the result of `3 + "2"` in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => '32', 'points' => '1', 'question_id' => $q81->id]);
Option::create(['answer' => '5', 'points' => '0', 'question_id' => $q81->id]);
Option::create(['answer' => '6', 'points' => '0', 'question_id' => $q81->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q81->id]);
$q82 = Question::create(['name' => 'Which function is used to output data in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'console.log()', 'points' => '1', 'question_id' => $q82->id]);
Option::create(['answer' => 'print()', 'points' => '0', 'question_id' => $q82->id]);
Option::create(['answer' => 'echo()', 'points' => '0', 'question_id' => $q82->id]);
Option::create(['answer' => 'output()', 'points' => '0', 'question_id' => $q82->id]);
$q83 = Question::create(['name' => 'What is the purpose of the `addEventListener` method in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'To attach an event handler to an element', 'points' => '1', 'question_id' => $q83->id]);
Option::create(['answer' => 'To create a new element', 'points' => '0', 'question_id' => $q83->id]);
Option::create(['answer' => 'To modify the style of an element', 'points' => '0', 'question_id' => $q83->id]);
Option::create(['answer' => 'To fetch data from a server', 'points' => '0', 'question_id' => $q83->id]);

$q84 = Question::create(['name'=>'Which layer of the OSI model is responsible for ensuring data is delivered error-free and in sequence?', 'category_id'=>$c13->id]);

Option::create(['answer'=>'Transport','points'=>'1', 'question_id'=>$q84->id]);
Option::create(['answer'=>'Physical','points'=>'0', 'question_id'=>$q84->id]);
Option::create(['answer'=>'Network','points'=>'0', 'question_id'=>$q84->id]);
Option::create(['answer'=>'Data Link','points'=>'0', 'question_id'=>$q84->id]);

$q85 = Question::create(['name'=>'What does the acronym DNS stand for?', 'category_id'=>$c13->id]);

Option::create(['answer'=>'Domain Name System','points'=>'1', 'question_id'=>$q85->id]);
Option::create(['answer'=>'Direct NEtwork System','points'=>'0', 'question_id'=>$q85->id]);
Option::create(['answer'=>'Data Network Service','points'=>'0', 'question_id'=>$q85->id]);
Option::create(['answer'=>'Domain Name Service','points'=>'0', 'question_id'=>$q85->id]);

$q86 = Question::create(['name'=>'Which protocol is used to securely transfer files over the Internet?

', 'category_id'=>$c13->id]);

Option::create(['answer'=>'FTP','points'=>'0', 'question_id'=>$q86->id]);
Option::create(['answer'=>'HTTP','points'=>'0', 'question_id'=>$q86->id]);
Option::create(['answer'=>'SSH','points'=>'0', 'question_id'=>$q86->id]);
Option::create(['answer'=>'SFTP','points'=>'1', 'question_id'=>$q86->id]);


$q87 = Question::create(['name'=>'What is the primary function of a router in a network?
', 'category_id'=>$c13->id]);

Option::create(['answer'=>'To store data','points'=>'0', 'question_id'=>$q87->id]);
Option::create(['answer'=>'To connect multiple networks and forward data packets between them
','points'=>'1', 'question_id'=>$q87->id]);
Option::create(['answer'=>'To encrypt data','points'=>'0', 'question_id'=>$q87->id]);
Option::create(['answer'=>'To manage user permissions','points'=>'0', 'question_id'=>$q87->id]);


$q88 = Question::create(['name'=>'Which IP address range is designated for private networks?
', 'category_id'=>$c13->id]);

Option::create(['answer'=>' 192.168.0.0 - 192.168.255.255
','points'=>'0', 'question_id'=>$q88->id]);
Option::create(['answer'=>'10.0.0.0 - 10.255.255.255
','points'=>'0', 'question_id'=>$q88->id]);
Option::create(['answer'=>'172.16.0.0 - 172.31.255.255
','points'=>'0', 'question_id'=>$q88->id]);

Option::create(['answer'=>'All of the above','points'=>'1', 'question_id'=>$q88->id]);

$q89 = Question::create(['name'=>'Which command is used to check the connectivity between two network devices?', 'category_id'=>$c13->id]);

Option::create(['answer'=>' ipconfig','points'=>'0', 'question_id'=>$q89->id]);
Option::create(['answer'=>'ping','points'=>'1', 'question_id'=>$q89->id]);
Option::create(['answer'=>'traceroute','points'=>'0', 'question_id'=>$q89->id]);

Option::create(['answer'=>'netstat', 'points'=>'0', 'question_id'=>$q89->id]);

$q90 = Question::create(['name'=>'What is the default port number for HTTP?
', 'category_id'=>$c13->id]);

Option::create(['answer'=>'21','points'=>'0', 'question_id'=>$q90->id]);
Option::create(['answer'=>'80','points'=>'1', 'question_id'=>$q90->id]);
Option::create(['answer'=>'443','points'=>'0', 'question_id'=>$q90->id]);

Option::create(['answer'=>'110', 'points'=>'0', 'question_id'=>$q90->id]);


$q91 = Question::create(['name'=>'In networking, what does VLAN stand for?
', 'category_id'=>$c13->id]);

Option::create(['answer'=>'Virtual Link Access Network
','points'=>'0', 'question_id'=>$q91->id]);
Option::create(['answer'=>' Virtual Local Area Network
','points'=>'1', 'question_id'=>$q91->id]);
Option::create(['answer'=>' Virtual LAN Adapter Network
','points'=>'0', 'question_id'=>$q91->id]);

Option::create(['answer'=>'C. Variable Local Area Network
', 'points'=>'0', 'question_id'=>$q91->id]);

$q92 = Question::create(['name'=>'Which device operates at the Data Link layer of the OSI model?
', 'category_id'=>$c13->id]);

Option::create(['answer'=>'Router','points'=>'0', 'question_id'=>$q92->id]);
Option::create(['answer'=>'Switch','points'=>'1', 'question_id'=>$q92->id]);
Option::create(['answer'=>'Firewall','points'=>'0', 'question_id'=>$q92->id]);

Option::create(['answer'=>'Hub', 'points'=>'0', 'question_id'=>$q92->id]);

$q93 = Question::create(['name'=>'What does the term "latency" refer to in networking?', 'category_id'=>$c13->id]);

Option::create(['answer'=>'The amount of data transferred per second','points'=>'0', 'question_id'=>$q93->id]);
Option::create(['answer'=>'The time it takes for a data packet to travel from the source to the destination','points'=>'1', 'question_id'=>$q93->id]);
Option::create(['answer'=>' The number of hops a packet takes to reach its destination','points'=>'0', 'question_id'=>$q93->id]);
Option::create(['answer'=>' The maximum amount of data a network can handle', 'points'=>'0', 'question_id'=>$q93->id]);


// binary system

$q94 = Question::create(['name'=>'What is the binary equivalent of the decimal number 5?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1010','points'=>'0', 'question_id'=>$q94->id]);
Option::create(['answer'=>'101','points'=>'1', 'question_id'=>$q94->id]);
Option::create(['answer'=>'110','points'=>'0', 'question_id'=>$q94->id]);
Option::create(['answer'=>' 1001', 'points'=>'0', 'question_id'=>$q94->id]);

$q101 = Question::create(['name'=>'Which of the following is the binary representation of the decimal number 10?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1010','points'=>'1', 'question_id'=>$q101->id]);
Option::create(['answer'=>'1100','points'=>'0', 'question_id'=>$q101->id]);
Option::create(['answer'=>' 1001','points'=>'0', 'question_id'=>$q101->id]);
Option::create(['answer'=>' 1110', 'points'=>'0', 'question_id'=>$q101->id]);

$q95 = Question::create(['name'=>'What is the result of adding the binary numbers 1011 and 1101?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'10010','points'=>'1', 'question_id'=>$q95->id]);
Option::create(['answer'=>'10100','points'=>'0', 'question_id'=>$q95->id]);
Option::create(['answer'=>'1110','points'=>'0', 'question_id'=>$q95->id]);
Option::create(['answer'=>'11000', 'points'=>'0', 'question_id'=>$q95->id]);

$q96 = Question::create(['name'=>'What is the binary equivalent of the decimal number 15?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1101','points'=>'0', 'question_id'=>$q96->id]);
Option::create(['answer'=>'1111','points'=>'1', 'question_id'=>$q96->id]);
Option::create(['answer'=>' 1011','points'=>'0', 'question_id'=>$q96->id]);
Option::create(['answer'=>' 1110', 'points'=>'0', 'question_id'=>$q96->id]);

$q97 = Question::create(['name'=>'Which of the following is the binary equivalent of the hexadecimal number A?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1010','points'=>'1', 'question_id'=>$q97->id]);
Option::create(['answer'=>'1100','points'=>'0', 'question_id'=>$q97->id]);
Option::create(['answer'=>' 1001','points'=>'0', 'question_id'=>$q97->id]);
Option::create(['answer'=>' 1110', 'points'=>'0', 'question_id'=>$q97->id]);

$q98 = Question::create(['name'=>'What is the decimal equivalent of the binary number 1101?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'13','points'=>'1', 'question_id'=>$q98->id]);
Option::create(['answer'=>'14','points'=>'0', 'question_id'=>$q98->id]);
Option::create(['answer'=>'12','points'=>'0', 'question_id'=>$q98->id]);
Option::create(['answer'=>'15', 'points'=>'0', 'question_id'=>$q98->id]);

$q99 = Question::create(['name'=>' Which of the following is the correct binary representation of the decimal number 8?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1000','points'=>'1', 'question_id'=>$q99->id]);
Option::create(['answer'=>'1100','points'=>'0', 'question_id'=>$q99->id]);
Option::create(['answer'=>'1010','points'=>'0', 'question_id'=>$q99->id]);
Option::create(['answer'=>'1111', 'points'=>'0', 'question_id'=>$q99->id]);

$q100 = Question::create(['name'=>'What is the binary equivalent of the decimal number 3?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'10','points'=>'0', 'question_id'=>$q100->id]);
Option::create(['answer'=>'11','points'=>'1', 'question_id'=>$q100->id]);
Option::create(['answer'=>' 111','points'=>'0', 'question_id'=>$q100->id]);
Option::create(['answer'=>'100 ', 'points'=>'0', 'question_id'=>$q100->id]);

$q102 = Question::create(['name'=>'What is the result of subtracting the binary number 1010 from 1111?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'0101','points'=>'0', 'question_id'=>$q102->id]);
Option::create(['answer'=>'0011','points'=>'0', 'question_id'=>$q102->id]);
Option::create(['answer'=>'0100','points'=>'1', 'question_id'=>$q102->id]);
Option::create(['answer'=>'0110', 'points'=>'0', 'question_id'=>$q102->id]);

$q103 = Question::create(['name'=>' Which of the following binary numbers is the largest?', 'category_id'=>$c16->id]);
Option::create(['answer'=>'1010','points'=>'0', 'question_id'=>$q103->id]);
Option::create(['answer'=>'1110','points'=>'1', 'question_id'=>$q103->id]);
Option::create(['answer'=>'1101','points'=>'0', 'question_id'=>$q103->id]);
Option::create(['answer'=>'1001', 'points'=>'0', 'question_id'=>$q103->id]);

// computer haradware

$q104 = Question::create(['name'=>'Which of the following is the main component of a computer that performs the processing?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'RAM','points'=>'0', 'question_id'=>$q104->id]);
Option::create(['answer'=>'CPU','points'=>'1', 'question_id'=>$q104->id]);
Option::create(['answer'=>'GPU','points'=>'0', 'question_id'=>$q104->id]);
Option::create(['answer'=>'Hard Drive', 'points'=>'0','question_id'=>$q104->id]);

$q105 = Question::create(['name'=>'What type of memory is used for temporary storage while a computer is running?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'RAM','points'=>'1', 'question_id'=>$q105->id]);
Option::create(['answer'=>'ROM','points'=>'0', 'question_id'=>$q105->id]);
Option::create(['answer'=>'SSD','points'=>'0', 'question_id'=>$q105->id]);
Option::create(['answer'=>'HDD', 'points'=>'0', 'question_id'=>$q105->id]);

$q106 = Question::create(['name'=>'Which component is responsible for rendering graphics in a computer?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'GPU','points'=>'1', 'question_id'=>$q106->id]);
Option::create(['answer'=>'CPU','points'=>'0', 'question_id'=>$q106->id]);
Option::create(['answer'=>'Sound Card','points'=>'0', 'question_id'=>$q106->id]);
Option::create(['answer'=>'Network Card', 'points'=>'0', 'question_id'=>$q106->id]);

$q107 = Question::create(['name'=>'What does SSD stand for', 'category_id'=>$c12->id]);
Option::create(['answer'=>'Super Speed Drive','points'=>'0', 'question_id'=>$q107->id]);
Option::create(['answer'=>'Solid State Drive','points'=>'1', 'question_id'=>$q107->id]);
Option::create(['answer'=>'System Storage Device','points'=>'0', 'question_id'=>$q107->id]);
Option::create(['answer'=>'Serial Storage Disk', 'points'=>'0', 'question_id'=>$q107->id]);

$q108 = Question::create(['name'=>'Which of the following is not a type of computer port?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'BIOS','points'=>'1', 'question_id'=>$q108->id]);
Option::create(['answer'=>'HDMI','points'=>'0', 'question_id'=>$q108->id]);
Option::create(['answer'=>'USB','points'=>'0', 'question_id'=>$q108->id]);
Option::create(['answer'=>'SATA', 'points'=>'0', 'question_id'=>$q108->id]);

$q109 = Question::create(['name'=>'What is the primary function of the motherboard?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'To connect all the hardware components','points'=>'1', 'question_id'=>$q109->id]);
Option::create(['answer'=>'To store data','points'=>'0', 'question_id'=>$q109->id]);
Option::create(['answer'=>'To cool the computer','points'=>'0', 'question_id'=>$q109->id]);
Option::create(['answer'=>'To power the computer', 'points'=>'0', 'question_id'=>$q109->id]);

$q110 = Question::create(['name'=>'Which of the following devices is used to input data into a computer? ', 'category_id'=>$c12->id]);
Option::create(['answer'=>'Keyboard','points'=>'1', 'question_id'=>$q110->id]);
Option::create(['answer'=>'Monitor','points'=>'0', 'question_id'=>$q110->id]);
Option::create(['answer'=>'Printer','points'=>'0', 'question_id'=>$q110->id]);
Option::create(['answer'=>'Speaker', 'points'=>'0', 'question_id'=>$q110->id]);

$q111 = Question::create(['name'=>'Which type of storage is known for having no moving parts and being faster than traditional hard drives?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'DVD','points'=>'0', 'question_id'=>$q111->id]);
Option::create(['answer'=>'SSD','points'=>'1', 'question_id'=>$q111->id]);
Option::create(['answer'=>'HDD','points'=>'0', 'question_id'=>$q111->id]);
Option::create(['answer'=>'CD-ROM', 'points'=>'0', 'question_id'=>$q111->id]);

$q112 = Question::create(['name'=>'What does PSU stand for in computer hardware?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'Power Storage Unit','points'=>'0', 'question_id'=>$q112->id]);
Option::create(['answer'=>'Power Supply Unit','points'=>'1', 'question_id'=>$q112->id]);
Option::create(['answer'=>'Processing System Unit','points'=>'0', 'question_id'=>$q112->id]);
Option::create(['answer'=>'Peripheral Supply Unit', 'points'=>'0', 'question_id'=>$q112->id]);

$q113 = Question::create(['name'=>'Which component is used to dissipate heat from the CPU?', 'category_id'=>$c12->id]);
Option::create(['answer'=>'Power Supply','points'=>'0', 'question_id'=>$q113->id]);
Option::create(['answer'=>'Heatsink and Fan','points'=>'1', 'question_id'=>$q113->id]);
Option::create(['answer'=>'Hard Drive','points'=>'0', 'question_id'=>$q113->id]);
Option::create(['answer'=>'Motherboard', 'points'=>'0', 'question_id'=>$q113->id]);

// information security

$q114 = Question::create(['name'=>'What does the CIA triad in information security stand fo', 'category_id'=>$c10->id]);
Option::create(['answer'=>'Confidentiality, Integrity, Availability','points'=>'1', 'question_id'=>$q114->id]);
Option::create(['answer'=>'Confidentiality, Integrity, Authentication','points'=>'0', 'question_id'=>$q114->id]);
Option::create(['answer'=>'Control, Integrity, Access','points'=>'0', 'question_id'=>$q114->id]);
Option::create(['answer'=>'Confidentiality, Identity, Authentication', 'points'=>'0', 'question_id'=>$q114->id]);

$q115 = Question::create(['name'=>'What is the primary goal of information security?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'To ensure the availability of data','points'=>'0', 'question_id'=>$q115->id]);
Option::create(['answer'=>'To protect data from unauthorized access','points'=>'1', 'question_id'=>$q115->id]);
Option::create(['answer'=>'To ensure data is backed up regularly','points'=>'0', 'question_id'=>$q115->id]);
Option::create(['answer'=>'To comply with legal requirement', 'points'=>'0', 'question_id'=>$q115->id]);

$q116 = Question::create(['name'=>'What is the most effective way to protect against phishing attacks?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'Using strong passwords','points'=>'0', 'question_id'=>$q116->id]);
Option::create(['answer'=>'Encrypting data','points'=>'0', 'question_id'=>$q116->id]);
Option::create(['answer'=>'User education and awareness','points'=>'1', 'question_id'=>$q116->id]);
Option::create(['answer'=>'Installing antivirus software', 'points'=>'0', 'question_id'=>$q116->id]);

$q117 = Question::create(['name'=>'What does two-factor authentication (2FA) provide?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'Single layer of security','points'=>'0', 'question_id'=>$q117->id]);
Option::create(['answer'=>'A method to recover lost passwords','points'=>'0', 'question_id'=>$q117->id]);
Option::create(['answer'=>'An additional layer of security by requiring two forms of verification','points'=>'1', 'question_id'=>$q117->id]);
Option::create(['answer'=>'A way to encrypt sensitive data', 'points'=>'0', 'question_id'=>$q117->id]);

$q118 = Question::create(['name'=>'Which of the following is a common type of social engineering attack?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'Brute force attack','points'=>'0', 'question_id'=>$q118->id]);
Option::create(['answer'=>'Phishing','points'=>'1', 'question_id'=>$q118->id]);
Option::create(['answer'=>'SQL injection','points'=>'0', 'question_id'=>$q118->id]);
Option::create(['answer'=>'Man-in-the-middle attack', 'points'=>'0', 'question_id'=>$q118->id]);

$q119 = Question::create(['name'=>'What is the purpose of a firewall in a network?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'To prevent data loss','points'=>'0', 'question_id'=>$q119->id]);
Option::create(['answer'=>'To monitor employee activity','points'=>'0', 'question_id'=>$q119->id]);
Option::create(['answer'=>'To block unauthorized access while permitting outward communication','points'=>'1', 'question_id'=>$q110->id]);
Option::create(['answer'=>'To encrypt sensitive data', 'points'=>'0', 'question_id'=>$q119->id]);

$q200 = Question::create(['name'=>'Which of the following is an example of a strong password?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'password123','points'=>'0', 'question_id'=>$q200->id]);
Option::create(['answer'=>' abc123','points'=>'0', 'question_id'=>$q200->id]);
Option::create(['answer'=>'JohnDoe','points'=>'0', 'question_id'=>$q200->id]);
Option::create(['answer'=>'@P4ssw0rd!', 'points'=>'1', 'question_id'=>$q200->id]);

$q201 = Question::create(['name'=>'What is the main function of encryption?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'To compress data for faster transmission','points'=>'0', 'question_id'=>$q201->id]);
Option::create(['answer'=>'To convert data into a readable format','points'=>'0', 'question_id'=>$q201->id]);
Option::create(['answer'=>'To hide data within other data','points'=>'0', 'question_id'=>$q201->id]);
Option::create(['answer'=>'To convert data into an unreadable format to prevent unauthorized access', 'points'=>'1', 'question_id'=>$q201->id]);

$q202 = Question::create(['name'=>'Which of the following is a characteristic of malware?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'It enhances system performance','points'=>'1', 'question_id'=>$q202->id]);
Option::create(['answer'=>'It is designed to protect data','points'=>'0', 'question_id'=>$q202->id]);
Option::create(['answer'=>'It disrupts, damages, or gains unauthorized access to computer systems','points'=>'1', 'question_id'=>$q202->id]);
Option::create(['answer'=>'It is a software update', 'points'=>'0', 'question_id'=>$q202->id]);

$q203 = Question::create(['name'=>'Which of the following best describes a Denial of Service (DoS) attack?', 'category_id'=>$c10->id]);
Option::create(['answer'=>'An attack that encrypts data and demands ransom','points'=>'0', 'question_id'=>$q203->id]);
Option::create(['answer'=>'An attack that prevents legitimate users from accessing resources','points'=>'1', 'question_id'=>$q203->id]);
Option::create(['answer'=>'An attack that steals sensitive information','points'=>'0', 'question_id'=>$q203->id]);
Option::create(['answer'=>'An attack that defaces a website', 'points'=>'0', 'question_id'=>$q203->id]);


//ethical hacking

$q204 = Question::create(['name'=>'What is the primary purpose of ethical hacking?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'To bypass security measures for personal gain','points'=>'0', 'question_id'=>$q204->id]);
Option::create(['answer'=>'To discover vulnerabilities in a system and suggest fixes','points'=>'1', 'question_id'=>$q204->id]);
Option::create(['answer'=>'To develop new hacking techniques','points'=>'0', 'question_id'=>$q204->id]);
Option::create(['answer'=>' To demonstrate hacking skills to peers', 'points'=>'0', 'question_id'=>$q204->id]);

$q205 = Question::create(['name'=>'Which of the following is a legal requirement for ethical hacking?', 'category_id'=>$c14->id]);
Option::create(['answer'=>' The hacker must be certified','points'=>'0', 'question_id'=>$q205->id]);
Option::create(['answer'=>'The hacker must use open-source tools','points'=>'0', 'question_id'=>$q205->id]);
Option::create(['answer'=>'The hacker must have permission from the system owner','points'=>'1', 'question_id'=>$q205->id]);
Option::create(['answer'=>'The hacker must work alone', 'points'=>'0', 'question_id'=>$q205->id]);

$q206 = Question::create(['name'=>'What does the term "penetration testing" refer to in ethical hacking?', 'category_id'=>$c14->id]);
Option::create(['answer'=>' Writing malware to test antivirus software','points'=>'0', 'question_id'=>$q206->id]);
Option::create(['answer'=>'Testing the performance of a system under load','points'=>'0', 'question_id'=>$q206->id]);
Option::create(['answer'=>'Simulating an attack to identify security vulnerabilities','points'=>'1', 'question_id'=>$q206->id]);
Option::create(['answer'=>'Testing network speed and reliability', 'points'=>'0', 'question_id'=>$q206->id]);

$q207 = Question::create(['name'=>'Which of the following tools is commonly used in ethical hacking for network scanning?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'Wireshark','points'=>'0', 'question_id'=>$q207->id]);
Option::create(['answer'=>'Nmap','points'=>'1', 'question_id'=>$q207->id]);
Option::create(['answer'=>'Metasploit','points'=>'0', 'question_id'=>$q207->id]);
Option::create(['answer'=>'Burp Suite', 'points'=>'0', 'question_id'=>$q207->id]);

$q208 = Question::create(['name'=>'Which of the following best describes a "white hat" hacker?', 'category_id'=>$c14->id]);
Option::create(['answer'=>' A hacker who exploits vulnerabilities for financial gain','points'=>'0', 'question_id'=>$q208->id]);
Option::create(['answer'=>'A hacker who operates without regard to the law','points'=>'0', 'question_id'=>$q208->id]);
Option::create(['answer'=>'A hacker who works to improve security by finding vulnerabilities','points'=>'1', 'question_id'=>$q208->id]);
Option::create(['answer'=>' A hacker who steals data for competitive advantage', 'points'=>'0', 'question_id'=>$q208->id]);

$q209 = Question::create(['name'=>' What is a "zero-day" exploit?', 'category_id'=>$c14->id]);
Option::create(['answer'=>' A vulnerability that has been patched on the same day it was found','points'=>'1', 'question_id'=>$q209->id]);
Option::create(['answer'=>'A vulnerability that is exploited before the vendor has released a patch','points'=>'0', 'question_id'=>$q209->id]);
Option::create(['answer'=>'A publicized vulnerability that is widely known','points'=>'0', 'question_id'=>$q209->id]);
Option::create(['answer'=>'A hacking technique that only works on older systems', 'points'=>'0', 'question_id'=>$q209->id]);

$q210 = Question::create(['name'=>'Which of the following is NOT a phase of the ethical hacking process?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'Reconnaissance','points'=>'0', 'question_id'=>$q210->id]);
Option::create(['answer'=>'Scanning','points'=>'0', 'question_id'=>$q210->id]);
Option::create(['answer'=>'Reporting','points'=>'0', 'question_id'=>$q210->id]);
Option::create(['answer'=>' Data Mining', 'points'=>'1', 'question_id'=>$q210->id]);

$q211 = Question::create(['name'=>'What is the main purpose of social engineering in the context of ethical hacking?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'To hack into secure servers','points'=>'0', 'question_id'=>$q211->id]);
Option::create(['answer'=>'To gather confidential information through human interaction','points'=>'1', 'question_id'=>$q211->id]);
Option::create(['answer'=>'To design secure software','points'=>'0', 'question_id'=>$q211->id]);
Option::create(['answer'=>'To test the physical security of a location', 'points'=>'0', 'question_id'=>$q211->id]);

$q212 = Question::create(['name'=>'What is the ethical hacker role in the post attack phase?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'To cover their tracks','points'=>'0', 'question_id'=>$q212->id]);
Option::create(['answer'=>'To patch the vulnerabilities they exploited','points'=>'0', 'question_id'=>$q212->id]);
Option::create(['answer'=>'To delete any data they collected','points'=>'0', 'question_id'=>$q212->id]);
Option::create(['answer'=>'To document findings and suggest security improvements', 'points'=>'1', 'question_id'=>$q212->id]);

$q213 = Question::create(['name'=>'Which of the following describes the "black box" testing method in ethical hacking?', 'category_id'=>$c14->id]);
Option::create(['answer'=>'The tester has full knowledge of the system being tested','points'=>'0', 'question_id'=>$q213->id]);
Option::create(['answer'=>'The tester has no prior knowledge of the system','points'=>'0', 'question_id'=>$q213->id]);
Option::create(['answer'=>'The tester is only allowed to use automated tools','points'=>'0', 'question_id'=>$q213->id]);
Option::create(['answer'=>'The tester can only interact with the system user interface', 'points'=>'0', 'question_id'=>$q213->id]);


//software eigineering

$q150 = Question::create(['name'=>'Which of the following is not a software development life cycle (SDLC) model?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Waterfall','points'=>'0', 'question_id'=>$q150->id]);
Option::create(['answer'=>'Agile','points'=>'0', 'question_id'=>$q150->id]);
Option::create(['answer'=>'Spiral','points'=>'0', 'question_id'=>$q150->id]);
Option::create(['answer'=>'Hardware-based

', 'points'=>'1', 'question_id'=>$q150->id]);

$q151 = Question::create(['name'=>'What does Refactoring refer to in software engineering?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Adding new features to the software','points'=>'0', 'question_id'=>$q151->id]);
Option::create(['answer'=>'Modifying the software to fix bugs','points'=>'0', 'question_id'=>$q151->id]);
Option::create(['answer'=>'Restructuring existing code without changing its external behavior','points'=>'1', 'question_id'=>$q151->id]);
Option::create(['answer'=>'Rewriting the entire software system', 'points'=>'0', 'question_id'=>$q151->id]);

$q152 = Question::create(['name'=>'Which design pattern is often used to decouple an abstraction from its implementation?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Singleton','points'=>'0', 'question_id'=>$q152->id]);
Option::create(['answer'=>'Factory','points'=>'0', 'question_id'=>$q152->id]);
Option::create(['answer'=>'Observer','points'=>'0', 'question_id'=>$q152->id]);
Option::create(['answer'=>'Bridge', 'points'=>'1', 'question_id'=>$q152->id]);

$q153 = Question::create(['name'=>'What is the primary goal of software testing?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'To demonstrate that the software is bug-free','points'=>'0', 'question_id'=>$q153->id]);
Option::create(['answer'=>'To find defects and ensure the software meets requirements','points'=>'1', 'question_id'=>$q153->id]);
Option::create(['answer'=>'To optimize the code for performance','points'=>'0', 'question_id'=>$q153->id]);
Option::create(['answer'=>' To add new features to the software', 'points'=>'0', 'question_id'=>$q153->id]);

$q154 = Question::create(['name'=>'Which of the following is a non-functional requirement?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>' User login feature','points'=>'0', 'question_id'=>$q154->id]);
Option::create(['answer'=>'Data encryption','points'=>'1', 'question_id'=>$q154->id]);
Option::create(['answer'=>'Shopping cart functionality','points'=>'0', 'question_id'=>$q154->id]);
Option::create(['answer'=>'Password reset option', 'points'=>'0', 'question_id'=>$q154->id]);

$q155 = Question::create(['name'=>'Which Agile framework uses time-boxed iterations known as sprints?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Kanban','points'=>'0', 'question_id'=>$q155->id]);
Option::create(['answer'=>'Scrum','points'=>'1', 'question_id'=>$q155->id]);
Option::create(['answer'=>'Extreme Programming (XP)
','points'=>'0', 'question_id'=>$q155->id]);
Option::create(['answer'=>'Waterfall', 'points'=>'0', 'question_id'=>$q155->id]);

$q156 = Question::create(['name'=>'In UML, what does a solid line with a hollow arrowhead represent?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Association','points'=>'0', 'question_id'=>$q156->id]);
Option::create(['answer'=>'Inheritance','points'=>'1', 'question_id'=>$q156->id]);
Option::create(['answer'=>'Aggregation','points'=>'0', 'question_id'=>$q156->id]);
Option::create(['answer'=>'Dependency', 'points'=>'0', 'question_id'=>$q156->id]);

$q157 = Question::create(['name'=>'Which of the following is an example of a high-level programming language?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Assembly','points'=>'0', 'question_id'=>$q157->id]);
Option::create(['answer'=>'Python','points'=>'1', 'question_id'=>$q157->id]);
Option::create(['answer'=>' Machine code','points'=>'0', 'question_id'=>$q157->id]);
Option::create(['answer'=>' Binary code', 'points'=>'0', 'question_id'=>$q157->id]);

$q158 = Question::create(['name'=>'What is the purpose of a version control system?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'To manage different versions of software during its lifecycle','points'=>'1', 'question_id'=>$q158->id]);
Option::create(['answer'=>'To control user access to the software','points'=>'0', 'question_id'=>$q158->id]);
Option::create(['answer'=>'To automate software testing','points'=>'0', 'question_id'=>$q158->id]);
Option::create(['answer'=>'To deploy the software to production', 'points'=>'0', 'question_id'=>$q158->id]);

$q159 = Question::create(['name'=>'What does the acronym MVC stand for in software architecture?

', 'category_id'=>$c11->id]);
Option::create(['answer'=>'Model-View-Controller','points'=>'1', 'question_id'=>$q159->id]);
Option::create(['answer'=>'Multiple Version Control','points'=>'0', 'question_id'=>$q159->id]);
Option::create(['answer'=>'Module Version Control','points'=>'0', 'question_id'=>$q159->id]);
Option::create(['answer'=>'Model-Variable-Component', 'points'=>'0', 'question_id'=>$q159->id]);


}}

Noti::create(['text'=>'New quiz category added','user_id'=>'1']);


// $q214 = Question::create(['name'=>'', 'category_id'=>$c11->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q214->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q214->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q214->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q214->id]);

// $q215 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q215->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q215->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q215->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q215->id]);

// $q216 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q216->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q216->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q216->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q216->id]);

// $q217 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q217->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q217->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q217->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q217->id]);

// $q218 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q218->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q218->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q218->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q218->id]);

// $q219 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q219->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q219->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q219->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q219->id]);

// $q220 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q220->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q220->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q220->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q220->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);
// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);

// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);
// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);
// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);

// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);
// $q115 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q115->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q115->id]);

// $q116 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q116->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q116->id]);

// $q117 = Question::create(['name'=>'', 'category_id'=>$c16->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'1', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'','points'=>'0', 'question_id'=>$q117->id]);
// Option::create(['answer'=>'', 'points'=>'0', 'question_id'=>$q117->id]);

