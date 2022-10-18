<?php
//
//class TelegraphText
//{
//    private string $text; //Сам текст
//    private string $title; //Заголовок текста
//    private string $author; //Автор
//    private string $published; //Дата создания объекта
//    private string $slug; //Имя файла
//
//    public function __construct($author, $slug)
//    {
//        $this->author = $author;
//        $this->slug = $slug;
//        $this->published = date('Y-m-d');
//    }
//
//    public function __set($name, $value)
//    {
//        if ($name == 'author') {
//            if (strlen($value) <= 12) {
//                $this->author = $value;
//            }
//        }
//        if ($name == 'slug') {
//            if (preg_match('[\w]', $value)) {
//                $this->slug = $value;
//            }
//        }
//        if ($name == 'published') {
//            $newPublishedDate = str_replace('-', '', $value);
//            $currentPublishedDate = str_replace('-', '', $this->published);
//            if ($newPublishedDate >= $currentPublishedDate) {
//                $this->published = $value;
//            }
//        }
//    }
//
//    public function __get($name)
//    {
//        if ($name == 'author') {
//            return $this->author;
//        }
//        if ($name == 'slug') {
//            return $this->slug;
//        }
//        if ($name == 'published') {
//            return $this->published;
//        }
//    }
//
//    private function storeText(): void // На основе полей объекта формирует массив, серриализует его, а затем
//        //записывает в файл.
//    {
//        $post = [
//            'title' => $this->title,
//            'text' => $this->text,
//            'author' => $this->author,
//            'published' => $this->published
//        ];
//        $serializedPost = serialize($post);
//        file_put_contents($this->slug, $serializedPost);
//    }
//
//    private function loadText() //Выгружает содержимое из файла. И на основе выгруженного массива обновляет поля объекта.
//    {
//        $loadedPost = unserialize(file_get_contents($this->slug));
//        if (filesize($this->slug) !== 0) {
//            $this->title = $loadedPost['title'];
//            $this->text = $loadedPost['text'];
//            $this->author = $loadedPost['author'];
//            $this->published = $loadedPost['published'];
//            return $this->text;
//        }
//    }
//
//    public function editText($title, $text): void//Изменяет содержимое полей объекта title и text
//    {
//        $this->title = $title;
//        $this->text = $text;
//    }
//}
//
////--------------------------------------------------------------------------------------------
//
//$post = new TelegraphText('ilya', 'test');
//$post->editText('skazka', 'kjhkjhkuhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjhkjh');
////$post->storeText();
//$post->published = '22-09-19';
//echo $post->published . PHP_EOL;
