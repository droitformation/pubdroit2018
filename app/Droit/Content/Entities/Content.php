<?php namespace App\Droit\Content\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model {

    use SoftDeletes;

    protected $dates    = ['deleted_at'];

	protected $fillable = ['title','content','image','url','type','rang','page_id','style'];

    protected $table = 'contents';

    public function getNameAttribute()
    {
        if($this->title)
        {
            return $this->title;
        }

        if($this->content)
        {
            return strip_tags($this->truncate($this->content,80,'...',true));
        }
    }

    public function truncate($s, $l, $e = '...', $isHTML = false)
    {
        $i    = 0;
        $tags = [];

        if($isHTML)
        {
            preg_match_all('/<[^>]+>([^<]*)/', $s, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
            foreach($m as $o)
            {
                if($o[0][1] - $i >= $l)
                    break;
                $t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
                if($t[0] != '/')
                    $tags[] = $t;
                elseif(end($tags) == substr($t, 1))
                    array_pop($tags);
                $i += $o[1][1] - $o[0][1];
            }
        }

        return substr($s, 0, $l = min(strlen($s),  $l + $i)) . (count($tags = array_reverse($tags)) ? '' : '') . (strlen($s) > $l ? $e : '');
    }

    public function page()
    {
        return $this->belongsTo('App\Droit\Page\Entities\Page');
    }
}