The Laravel Installer

laravel new example-app   Create Project 
cd example-app    Go to your project Folder
php artisan serve    Run your project
 Shift + Alt + Down Arrow Key to Duplicate line
Maintenance Mode

php artisan down
php artisan up
Particular user access maitance mode. Bypassing Maintenance Mode
php artisan down --secret="surendra"
http://127.0.0.1:8000/surendra
Redirecting Maintenance Mode Requests Show Custom Page while Maintance mode
php artisan down --render="error"


Query Builder

Import this controller Page
use Illuminate\Support\Facades\DB;
Fetch all data from database
 function queryBuild(){

return DB::table('members')->get();

    }

Count data from table


$data =  DB::table('members')->count();

Insert data in database using query builder

return DB::table('members')
->insert(
    [
        'name'=>'anil',
        'address'=>'pune'
    ]
);


Update data from database

return DB::table('members')
->where('id',2)
->update(
    [
        'name'=>'ramn',
        'address'=>'nashik'
    ]
);

// Delete data from database

return DB::table('members')
->where('id',2)
->delete();

What is Laravel Seeder

“Laravel Seeder is a way of inserting set of data to the database by running a single command. “
php artisan make:seeder CitiesTableSeeder

public function run()
{
    DB::table('cities')->truncate();
    DB::table('cities')->insert([
        ['id' => 1, 'name' => 'Alabama'],
        ['id' => 2, 'name' => 'Alaska'],
        ['id' => 3, 'name' => 'Arizona'],
        ['id' => 4, 'name' => 'Arkansas'],
        ['id' => 5, 'name' => 'California'],
   ]);
}

php artisan db:seed –class=CitiesTableSeeder

Laravel Validation
Validation is the process of checking the incoming data. By default, laravel provides the base controller class that uses the ValidatesRequests trait to validate all the incoming Http requests.


Add this in controller page
use Validator;
$rule = array(

            // "name"=>'required',
            "name"=>'required|min:2|max:10',
            "address"=>'required|min:10|max:20',
            "contact"=>'required|min:9|max:10'
            
        );
   $validator = Validator::make($reqs->all(),$rule);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $test = new test;
            $test->name = $reqs->name;
            $test->address  = $reqs->address;
            $test->contact = $reqs->contact;
            $results = $test->save();          
            if($results){
                return ['Result'=>'Data has been saved'];    
           }else{
                return ['Error'=>'Invalid']; 
               }         }
      


Resource
Eloquent: API Resources
A resource controller is used to create a controller that handles all the http requests stored by your application. The resource () is a static function like get ()
 method that gives access to multiple routes that we can use in a controller.
Laravel resource provide inbuilt some function for curd operation, Using resource one route we can perform curd tasks.
Cmd
php artisan make:controller ResourcApiController –resource

controller page

use App\Http\Controllers\ResourcApiController;
Route::apiResource('resource',ResourcApiController::class);

Laravel - Sending Email
https://laravel.com/docs/8.x/mail
php artisan make:mail SampleMail --markdown=emails.SampleMail
SampleMail is Inside Mail folder Created
emails is folder name 
SampleMail  is file creating which send to email
.env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=surendra75maurya@gmail.com
MAIL_PASSWORD=9702609250
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=surendra75maurya@gmail.com
MAIL_FROM_NAME="${APP_NAME}"



Test Email in browser how email is view
Web.php 
Import this web.php  
use App\Mail\SampleMail;
Route::get('/', function () {
    return new SampleMail();
});

Mail  Controller
Use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;





Component 
php artisan make:component Header

Migration 
php artisan make:migration create_register_table
php artisan migrate:status
php artisan migrate --force
Rollback Migration from in you database

php artisan migrate:rollback
The migrate:reset command will roll back all of your application's migrations:
php artisan migrate:reset
php artisan migrate:rollback
The migrate:refresh command will roll back all of your migrations and then execute the migrate command. This command effectively re-creates your entire database:
php artisan migrate:refresh



Password Hashing
Add this controller page
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;


 $hash =  Hash::make($req->password);
        $data->password =  $hash;


