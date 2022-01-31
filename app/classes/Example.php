<?php


namespace App\classes;


class Example
{

    public $student = [];

    public function index()
    {
//        $this->student = [10, 20, 'BITM', 10.20, true, false];
//        //echo $this->student[4];
//        foreach ($this->student as $role => $student)
//        {
//            echo 'index no-'. $role.'value -'.$student.'<br/>';
//        }
//    }
        $this->student = [
            0 => [
                'name' => 'Jahid', ///array => object sign
                'email' => 'jahid@gmail.com',
                'mobile' => [
                    'mobile1' => '12345',
                    'mobile2' => '2345'
                ]
            ],
            1 => [
                'name' => 'Hasan', ///array => object sign
                'email' => 'hasan@gmail.com',
                //'mobile' => '12345678'
                'mobile' => [
                    'mobile1' => '1234533',
                    'mobile2' => '234533'
                ]
            ],
//            2 =>[
//                'name' => 'anik', ///array => object sign
//                'email' => 'anik@gmail.com',
//                'mobile' => '12345678'
//            ]
            2 => 'BITM',
            3 => [
                'name' => 'anik', ///array => object sign
                'email' => 'anik@gmail.com',
                //'mobile' => '12345678'
                'mobile' => [
                    'mobile1' => '1234555',
                    'mobile2' => '234555'
                ]
            ]
        ];

//        $this->student[0]['name'] = 'Jahid';
//        $this->student[0]['email'] = 'Jahid@gmail';
//        $this->student[0]['mobile'] = '12345678';
//        $this->student[1]['name'] = 'Jahid';
//        $this->student[1]['email'] = 'Jahid@gmail';
//        $this->student[1]['mobile'] = '12345678';
//        $this->student[2]['name'] = 'Jahid';
//        $this->student[2]['email'] = 'Jahid@gmail';
//        $this->student[2]['mobile'] = '12345678';
        //echo $this->student[1]['email']; //index and value print


//        foreach ($this->student as $key => $item)
//        {
////            if ($key === 0)
////            {
////                echo $item['name'].$item['email'].$item['mobile'].'<br/>';  //specific looping print
////                break;
////            }
//            //echo $item['name'].$item['email'].$item['mobile'].'<br/>';  //looping print
//
//            if (is_array($item))  ///for string pass
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value)) // for decendent array
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else{
//                        echo $value;
//                    }
//                   // echo $value.' ';  //for unknown index
//                }
//            }
//            else{
//                echo $item;
//            }
//
////            foreach ($item as $value)
////            {
////                echo $value.' ';  //for unknown index
////            }
//            echo '<br/>'; //per array index
//        }
        echo '<pre>';
       // print_r($this->student); ///check array
        var_dump($this->student);

    }

}