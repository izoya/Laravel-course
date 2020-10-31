<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  protected $newsList = [
    [
      'id' => 1,
      'slug' => 'one',
      'category_id' => 1,
      'title' => 'First news',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 2,
      'slug' => 'two',
      'category_id' => 1,
      'title' => 'Second news',
      'description' => 'Lorem ipsum dolor sit amet, aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 3,
      'slug' => 'three',
      'category_id' => 1,
      'title' => 'Third news',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 4,
      'slug' => 'four',
      'category_id' => 1,
      'title' => 'Forth news',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 5,
      'slug' => 'five',
      'category_id' => 2,
      'title' => 'Commodi 2-5',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 6,
      'slug' => 'six',
      'category_id' => 2,
      'title' => 'Commodi 2-6',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 7,
      'slug' => 'seven',
      'category_id' => 2,
      'title' => 'Commodi 2-7',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 8,
      'slug' => 'eight',
      'category_id' => 2,
      'title' => 'Commodi 2-8',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 9,
      'slug' => 'nine',
      'category_id' => 3,
      'title' => 'Accusamus 3-9',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 10,
      'slug' => 'ten',
      'category_id' => 3,
      'title' => 'Accusamus 3-10',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 11,
      'slug' => 'eleven',
      'category_id' => 3,
      'title' => 'Accusamus 3-11',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 12,
      'slug' => 'twelve',
      'category_id' => 3,
      'title' => 'Accusamus 3-12',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 13,
      'slug' => 'thirteen',
      'category_id' => 4,
      'title' => 'Lorem 4-13',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 14,
      'slug' => 'fourteen',
      'category_id' => 4,
      'title' => 'Lorem 4-14',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 15,
      'slug' => 'fifteen',
      'category_id' => 4,
      'title' => 'Lorem 4-15',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 16,
      'slug' => 'sixteen',
      'category_id' => 4,
      'title' => 'Lorem 4-16',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 17,
      'slug' => 'seventeen',
      'category_id' => 5,
      'title' => 'News 5-17',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 18,
      'slug' => 'eighteen',
      'category_id' => 5,
      'title' => 'News 5-18',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 19,
      'slug' => 'nineteen',
      'category_id' => 5,
      'title' => 'Lorem consectetur 5-19',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
    [
      'id' => 20,
      'slug' => 'twenty',
      'category_id' => 5,
      'title' => 'Lorem consectetur 5-20',
      'description' => 'Lorem consectetur adipisicing elit. Accusamus adipisci aliquam asperiores commodi consequuntur corporis culpa cumque error iste iure modi natus, non officiis quaerat quo ratione rem',
    ],
  ];

  public function index()
  {
    return view('news.index', [
      'news' => $this->newsList,
      'category' => 'All News',
      'categories' => $this->categories,
    ]);
  }

  public function show(string $slug)
  {
    $news_id = array_search($slug, array_column($this->newsList, 'slug'));

    if ($news_id === false) {
      return back();
    }

    return view('news.show', [
      'news' => $this->newsList[$news_id],
      'categories' => $this->categories,
    ]);
  }

  public function showFromCategory(int $id)
  {
    $newsFromCategory = [];

    foreach ($this->newsList as $news) {
      if (is_array($news)) {
        if (isset($news['category_id']) && intval($news['category_id']) === $id) {
          $newsFromCategory[] = $news;
        }
      }
    }

    return view('news.index', [
      'category' => $this->getCategories()[$id],
      'news' => $newsFromCategory,
      'categories' => $this->categories,
    ]);
  }
}