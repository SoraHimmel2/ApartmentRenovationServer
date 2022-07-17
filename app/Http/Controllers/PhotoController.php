<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PhotoController extends Controller
{
    public function photos(Request $request)
    {

       $photos = [
        [
          "id"=> 1,
          "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
        ],
        [
          "id"=> 2,
          "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
        ],
        [
            "id"=> 3,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ],
          [
            "id"=> 4,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ],
          [
            "id"=> 5,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ],
          [
            "id"=> 6,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ],
          [
            "id"=> 7,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ],
          [
            "id"=> 8,
            "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
          ]

        ];

        echo (json_encode($photos));
    }
    public function done(){
        $questions = [
            [
                "title"=> "Проект кухни",
                "author"=> "кухня",
                "id"=> 1
            ],
              [
                "title"=> "Первый проект",
                "author"=> "кухня",
                "id"=> 2
              ],
              [
                "title"=> "Проект кухни",
                "author"=> "кухня",
                "id"=> 3
            ],
              [
                "title"=> "Первый проект",
                "author"=> "кухня",
                "id"=> 4
              ],
              [
                "title"=> "Проект кухни",
                "author"=> "кухня",
                "id"=> 5
            ],
              [
                "title"=> "Первый проект",
                "author"=> "кухня",
                "id"=> 6
              ]
        ];
        echo (json_encode($questions));
    }
    public function questions(){
        $questions = [
            [
                "id"=> 1,
                "text"=> "Первый вопрос?",
                "answer"=>"Первый ответ?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it r belief, Lorem Ipsum is not simply random text. It has roots in a piece of "
              ],
              [
                "id"=> 2,
                "text"=> "Второй вопрос?",
                "answer"=>"Второй ответ?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it r belief, Lorem Ipsum is not simply random text. It has roots in a piece of "
              ],
              [
                "id"=> 3,
                "text"=> "Третий вопрос?",
                "answer"=>"Третий Ответ?\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it r belief, Lorem Ipsum is not simply random text. It has roots in a piece of "
              ]
        ];
        echo (json_encode($questions));

    }
    public function projectPhotos(Request $request,$id){
        $photos = [
            [
              "id"=> 1,
              "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
            ],
            [
              "id"=> 2,
              "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
            ],
            [
                "id"=> 3,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ],
              [
                "id"=> 4,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ],
              [
                "id"=> 5,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ],
              [
                "id"=> 6,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ],
              [
                "id"=> 7,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ],
              [
                "id"=> 8,
                "src"=> "https://images.adsttc.com/media/images/5319/4efc/c07a/8068/8c00/0193/slideshow/PORTADA.jpg?1394167528"
              ]

            ];
              echo (json_encode($photos[$id]));
    }

}
