<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\LessonDetail;

class LessonDetailImportClass implements ToModel
{
    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
    //    dd($row[1]);
        return new LessonDetail([
            // 'title' => $row['title'],
            // 'header' => $row['header'],
            // 'image_type' => $row['image_type'],
            // 'image' => $row['image'],
            // 'body' => $row['body'],
            // 'sub_body' => $row['sub_body'],
            // 'conclusion' => $row['conclusion'],
            // 'lesson_id' => $row['lesson_id']
            'title' => $row[1],
            'header' => $row[2],
            'image_type' => $row[3],
            'image' => $row[4],
            'body' => $row[5],
            'sub_body' => $row[6],
            'conclusion' => $row[7],
            'lesson_id' => $row[8]
        ]);
    }
}
