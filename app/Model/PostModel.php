<?php /* app/Model/CommentModel.php */
namespace App\Model;

// use App\Weblitzer\Model;
use App\Weblitzer\Model as ModelMVC; // Alias
use App\App;
use App\Weblitzer\Database;

class   PostModel extends ModelMVC
// class PostModel extends Model
// class UserModel extends \App\Weblitzer\Model
{
    protected static $table = 'post';

    public static function insert($post)
    {
        App::getDatabase()->prepareInsert('INSERT INTO ' . self::$table . ' (title,content,author) VALUES (?,?,?) ' ,
        [
            $post['titre'],
            $post['contenu'],
            $post['auteur']
        ]
        );
    }

}