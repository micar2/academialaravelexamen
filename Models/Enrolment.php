<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class Enrolment
 * @package App\Models
 * @version March 30, 2018, 8:48 am UTC
 */
class Enrolment extends Model
{
    use SoftDeletes;

    public $table = 'enrolments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'student',
        'subject',
        'paid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student' => 'integer',
        'subject' => 'integer',
        'paid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student' => 'required',
        'subject' => 'required',
        'paid' => 'required'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function freeSeats($id, $students_max)
    {
        $enrolled=count(Enrolment::where('subject','=',$id));
        $enrolled= $students_max - $enrolled;
        return $enrolled;

    }

    public static function check($subject)
    {
       // dd($subject.Auth::id());
            if (count(Enrolment::where('subject','=',$subject)->where('student','=',Auth::id())->get())==0){
                return true;
            }else{
                return false;
            }
    }


}
