<?php

return [
    'category' => 'Kategoria',
    'categories' => 'Kategoritë',

    'table' => [
        'name' => 'Emri',
        'slug' => 'Slug',
        'parent' => 'Kategoria prind',
        'menu' => 'Menyja',
        'products_count' => 'Numri i produkteve',
    ],

    'buttons' => [
        'add_root_category' => 'Shto kategori rrënjë',
        'add_sub_category' => 'Shto nënkategori',
        'expand_all' => 'Zgjero të gjitha',
        'collapse_all' => 'Mbyll të gjitha',
    ],

    'form' => [
        'create_root_category' => 'Krijo kategori rrënjë',
        'create_sub_category' => 'Krijo nënkategori',
    ],
    'import' => [
        'parent_slug' => 'Slug-u i prindit',
        'self_parent' => 'Një kategori nuk mund të jetë prind i vetvetes.',
        'missing_parent' => 'Slug-u i prindit nuk u gjet në këtë meny ose skedar importimi.',
        'cycle' => 'Hierarkia e prindërve përmban një cikël.',
        'invalid_parent' => 'Kategoria prind në këtë skedar ka gabime vlefshmërie.',
        'exists' => 'Ky slug ekziston tashmë në meny.',
        'missing' => 'Nuk ka asnjë kategori që përputhet me këtë slug.',
        'cannot_create' => 'Nuk mund të krijoni kategori.',
        'cannot_update' => 'Nuk mund të përditësoni kategori.',
    ],
];
