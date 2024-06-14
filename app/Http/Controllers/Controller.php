<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelReader;

abstract class Controller
{
    public function index()
    {
        return view("student.index");
    }

    public function store(Request $request)
    {
        $request->validate([
            "studentFile" => ["required", "file", "mimes:xls,xlsx"],
        ]);

        $file = $request->file("studentFile");
        $filePath = $file->storeAs("uploads", $file->getClientOriginalName());

        $rows = SimpleExcelReader::create(storage_path("app/" . $filePath))
            ->getRows()
            ->each(function (array $rowProperties) {
                if (isset($rowProperties["Students"]) && isset($rowProperties["Marks"])) {
                    Student::create([
                        "name" => $rowProperties["Students"],
                        "marks" => $rowProperties["Marks"]
                    ]);
                }
            });
    }

    public function show()
    {
        $studentMarks = Student::all();

        return view("student.show", ["studentMarks" => $studentMarks]);
    }

    public function analytics()
    {
        $students = Student::all();

        $total = 0;
        $highScore = 0;
        $bestStudent = "";

        foreach ($students as $student) {
            $marks =  $student->marks;
            $total += $marks;
            if ($marks > $highScore) {
                $highScore = $marks;
                $bestStudent = $student->name;
            }
        }

        $average = $total / count($students);

        $analysis = [
            "highScore" => $highScore,
            "total" => $total,
            "average" => $average,
            "bestStudent" => $bestStudent
        ];

        return view("student.analytics", ["data" => $analysis]);
    }
}
