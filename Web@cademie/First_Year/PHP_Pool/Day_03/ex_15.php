<?php
function teacher(): void
{
    echo "I am a Teacher\n";
}

function student(string $name): void
{
    echo "I am a student and my name is $name\n";
}

$func_teacher = 'teacher';
$func_student = 'student';
