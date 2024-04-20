<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            // Получаем данные из формы
            $eventName = $request->input('eventName');
            $organization = $request->input('organization');
            $description = $request->input('description');

            // Путь для сохранения изображения
            $imageUploadPath = public_path('uploads/');

            // Путь для сохранения текстового файла
            $textFilePath = public_path('text_files/');

            // Проверяем загружено ли изображение
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // Получаем имя файла
                $imageName = $request->file('image')->getClientOriginalName();
                // Перемещаем файл в папку для загрузки изображений
                $request->file('image')->move($imageUploadPath, $imageName);

                // Создаем текстовый файл и записываем в него данные
                $textData = "Название мероприятия: $eventName\nОрганизация: $organization\nОписание: $description";
                file_put_contents($textFilePath . 'certificate_info.txt', $textData);

                // Выводим сообщение об успешном сохранении
                return redirect()->back()->with('success', 'Изображение и данные успешно сохранены.');
            } else {
                // Выводим сообщение об ошибке загрузки изображения
                return redirect()->back()->with('error', 'Произошла ошибка при загрузке изображения.');
            }
        }
    }
}
