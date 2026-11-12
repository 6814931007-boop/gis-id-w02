@extends('layouts.app')

@section('title')
    Assignment
@endsection

@section('banner')
    <h1 class="text-4xl font-bold text-amber-600">Assignment</h1>
@endsection

@section('content')
    <h2 class="mb-2 text-2xl font-bold text-blue-800">รายการงานของรายวิชา</h2>
    <ol class="list-decimal pl-6">
        <li>สร้างเลย์เอาท์ด้วย Blade Template</li>
        <li>ทำหน้าแนะนำรายวิชา GIS</li>
        <li>ทำหน้า Bio แสดงประวัติผู้จัดทำ</li>
        <li>ทำหน้า Assignment แสดงรายการงาน</li>
        <li>กำหนด Route และบันทึกภาพหน้าจอ</li>
    </ol>
@endsection
