<?php
    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ArticleModel
    {

        public static function getById($id)
        {
            $items = DB::table('article')->where('id',$id)->get();
            return $items;
        }

        public static function index()
        {
            $items = DB::table('article')->get();
            return $items;
        }

        public static function store($data)
        {
            $items = DB::table('article')->insert($data);
            return $items;
        }

        public static function update($data)
        {
            $items = DB::table('article')
                                ->where('id',$data->id)
                                ->update(['judul' => $data->judul,
                                            'slug' => $data->slug,
                                            'isi' => $data->isi,
                                            'tag' => $data->tag]
                                );
            return $items;
        }

        public static function delete($id)
        {
            $items = DB::table('article')->where('id',$id)->delete();
            return $items;
        }
    }
?>