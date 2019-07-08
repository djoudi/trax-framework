<?php

return [

    // Files
    'file_not_found' => 'الملف غير موجود.',
    'file_uploaded_not_found' => 'الملف مفقود.',
    'file_not_valid' => 'الملف غير صالح.',
    'file_extension_not_valid' => 'هذا النوع من الملفات غير مسموح به.',
    'file_max_size_error' => 'الملف كبير جدا.',
    'file_model_not_found' => 'سياق الملف غير معروف.',

    // Status
    'draft_status_creation_error' => "
        الحالة الوحيدة المسموح بها هي  'المسودة'.
    ",
    'archived_status_creation_error' => "
        الحالة  'المؤرشفة' غير مسموح بها الآن.
    ",
    'draft_status_change_error' => "
        الحالة المسموح بها من 'المسودة' is 'هي في الخدمة الآن'.
    ",
    'active_status_change_error' => "
        الحالة المسموح بها 'في الخدمة' هي 'الصيانة' و 'المؤرشفة'.
    ",
    'maintenance_status_change_error' => "
        الحالة المسموح بها من 'الصيانة' هي 'في الخدمة' و 'المؤرشفة'.
    ",
    'archived_status_change_error' => "
        لا يمكن تغيير الحالة 'المؤرشفة' .
    ",

];
