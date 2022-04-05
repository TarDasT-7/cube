<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseVideo;
use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InstallController extends Controller
{
    public function install()
    {
        Artisan::call('migrate:fresh');

        /*start of user-role creating*/
        $count = 5;
        $name = ['saeed Azarmehr', 'Ali moraveji', 'Omid Azarmehr', 'Hamid Rezvan', 'Ali Rezvan'];
        $phone = [9394555831, 9173052402, 9177092637, 9177137914, 939252525];
        $email = ['saeed_azarmehr@yahoo.com', 'ali@yahoo.com', 'omid@yahoo.com', 'hamid@yahoo.com', 'ali_rez@yahoo.com'];


        while ($count) {
            $user = new User();
            $user->id = $count;
            $count--;
            $user->name = $name[$count];
            $user->phone = $phone[$count];
            $user->email = $email[$count];
            $user->role = 1;
            $user->password = Hash::make(2280909952);
            $user->save();
        }
        /*end of user-role creating*/


        /*start of corsecategory creating*/
        $count = 10;
        $tag = ['مهندسی برق', 'مهندسی مکانیک', 'مهندسی عمران', 'مهندسی معماری', 'مهندسی صنایع', 'مهندسی شیمی', 'مهندسی کامپیوتر', 'مهندسی هوافضا', 'مهندسی نفت', 'مهندسی مواد'];
        while ($count) {
            $cat = new CourseCategory();
            $cat->id = $count;
            $count--;
            $cat->name = $tag[$count];
            $cat->save();
        }
        /*end of course_category creating*/

        /*start of teacher creating*/
        $count = 10;
        $name = ['گالیلئو گالیله', 'آیزاک نیوتن', 'مایکل فارادی', 'ویلهلم رونتگن', 'ماری کوری', 'آلبرت اینشتین', 'اروین شرودینگر', 'نیکولا تسلا', 'نیلز بور', 'ارنست رادرفورد'];
        while ($count) {
            $cat = CourseCategory::find($count);
            $teacher = new Teacher();
            $teacher->id = $count;
            $count--;
            $teacher->name = $name[$count];
            $teacher->desc = 'this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...';
            $teacher->save();
            $teacher->course_categories()->attach($cat->id);
        }
        /*end of teacher creating*/

        /*start of course creating*/
        $count = 10;
        $art = ['مهندسی برق', 'مهندسی مکانیک', 'مهندسی عمران', 'مهندسی معماری', 'مهندسی صنایع', 'مهندسی شیمی', 'مهندسی کامپیوتر', 'مهندسی هوافضا', 'مهندسی نفت', 'مهندسی مواد'];
        $level = ['مقدماتی', 'متوسط', 'پیشرفته'];
        $condition = ['غیرفعال', 'فعال'];
        while ($count) {
            $cat = CourseCategory::find($count);
            $course = new Course();
            $course->teacher_id = $count;
            $course->image = $count . '.jpg';
            $course->id = $count;
            $count--;
            $course->title = $art[$count];
            $course->price = 200000;
            $course->off_price = 150000;
            $course->course_time = '50:00';
            $course->video_num = ceil(rand(0, 1) * 40);
            $off = round(($course->price - $course->off_price) / $course->price * 100);
            $course->off = $off;
            $lev = round(rand(0, 2));
            $course->level = $level[$lev];
            $course->desc = 'this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...';
            $con = round(rand(0, 1));
            $course->condition = $condition[$con];
            $course->save();
            $course->course_categories()->attach($cat->id);

        }
        /*end of course creating*/

        /*start of corsevideo creating*/

        $course = 9;
        $tag = ['مهندسی برق', 'مهندسی مکانیک', 'مهندسی عمران', 'مهندسی معماری', 'مهندسی صنایع', 'مهندسی شیمی', 'مهندسی کامپیوتر', 'مهندسی هوافضا', 'مهندسی نفت', 'مهندسی مواد'];
        while($course>-1) {
            $count = 10;
            while ($count) {
                $video = new CourseVideo();
                $video->course_id = $course+1;
                $video->show_id = $count;
                $video->course_time = $count . ':00';
                $video->title = $tag[$course] . $count;
                $video->file = $tag[$course] . $count;
                $count--;
                $video->save();
            }
            $course--;
        }
        /*end of coursevideo creating*/


        /*start of author creating*/
        $count = 10;
        $name = ['زیگموند فروید', 'کورت اشنایدر', 'دانیل ال-کونین', 'ادوارد چیس تولمن', 'ویلهلم دیلتای', 'بی اف اسکینر', 'ژان پیاژه', 'فرانتس برنتانو', 'فردریک بارتلت', 'رابرت استرنبرگ'];
        while ($count) {
            $auth = new Author();
            $auth->id = $count;
            $count--;
            $auth->name = $name[$count];
            $auth->save();
        }
        /*end of author creating*/

        /*start of blogcategory creating*/
        $count = 10;
        $tag = ['مهندسی برق', 'مهندسی مکانیک', 'مهندسی عمران', 'مهندسی معماری', 'مهندسی صنایع', 'مهندسی شیمی', 'مهندسی کامپیوتر', 'مهندسی هوافضا', 'مهندسی نفت', 'مهندسی مواد'];
        while ($count) {
            $cat = new BlogCategory();
            $cat->id = $count;
            $count--;
            $cat->name = $tag[$count];
            $cat->save();
        }
        /*end of blogcategory creating*/

        /*start of blog creating*/
        $count = 10;
        $art = ['مهندسی برق', 'مهندسی مکانیک', 'مهندسی عمران', 'مهندسی معماری', 'مهندسی صنایع', 'مهندسی شیمی', 'مهندسی کامپیوتر', 'مهندسی هوافضا', 'مهندسی نفت', 'مهندسی مواد'];
        while ($count) {
            $cat = BlogCategory::find($count);
            $blog = new Blog();
            $blog->id = $count;
            $blog->author_id = $count;
            $blog->image = $count . '.jpg';
            $count--;
            $blog->title = $art[$count];
            $blog->desc = 'this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...';
            $blog->save();
            $blog->blog_categories()->attach($cat->id);
        }
        /*end of blog creating*/

        /*start of commentss creating*/

        $com = 2;
        $cate = ['وبلاگ', 'دوره', 'پادکست'];
        $email = ['saeed@yahoo.com', 'ali@yahoo.com', 'omid@yahoo.com', 'hamid@yahoo.com', 'ali_rez@yahoo.com', 'mohammad@yahoo.com', 'navid@yahoo.com', 'soheil@yahoo.com', 'sheida@yahoo.com', 'payam@yahoo.com'];
        while ($com>-1) {
            $count = 10;
            while ($count) {
                $comment = new Comment();
                $comment->score = rand(0, 5);
                $count--;
                $comment->email = $email[$count];
                $comment->user_id = $com+1;
                $comment->desc = 'this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...this is a fake data...';
                $comment->category = $cate[$com];
                $comment->sub_category = $count;
                $comment->save();
            }
            $com--;
        }
            /*end of blog creating*/

            /*start  of questioncategor creating*/
            $count = 10;
            while ($count) {
                $category = new QuestionCategory();
                $category->name = $count.'دسته';
                $count--;
                $category->save();
            }
            /*end  of questioncategor creating*/

            /*start  of question creating*/
            $count = 10;
            while ($count) {
                $question = new Question();
                $question->question =$count.'سوال';
                $question->answer ='این توضیحات مربوط به سوال فوق است';
                $question->question_category_id =$count ;
                $count--;
                $question->save();
            }
            /*end  of question creating*/


        }
    }



