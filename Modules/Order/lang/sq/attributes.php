<?php

return [
    'orders' => [
        'type' => 'Lloji',
        'table_id' => 'Tavolina',
        'pos_register_id' => 'Arka e POS-it',
        'products.*' => 'Produkti',
        'notes' => 'Shënime',
        'guest_count' => 'Numri i mysafirëve',
        'payment_type' => 'Lloji i pagesës',
        'amount_to_be_paid' => 'Shuma për t\'u paguar',
        'car_plate' => 'Targa e makinës',
        'car_description' => 'Përshkrimi i makinës',
        'scheduled_at' => 'Planifikuar për',
        'products.*.actions' => 'Veprimet',
        'products.*.actions.*.action' => 'Veprimi',
        'products.*.actions.*.quantity' => 'Sasia',
        'refund_payment_method' => 'Metoda e rimbursimit',
        'products.*.order_product_id' => 'Produkti i porosisë',
    ],

    'reasons' => [
        'name' => 'Emri',
        'type' => 'Lloji',
        'is_active' => 'Aktiv',
    ],

    'cancel_or_refund' => [
        'register_id' => 'Arka e POS-it',
        'session_id' => 'Seanca',
        'reason_id' => 'Arsyeja',
        'note' => 'Shënim',
        'refund_payment_method' => 'Metoda e rimbursimit',
        'gift_card_code' => 'Kodi i kartës dhuratë',
    ],

    'payments' => [
        'register_id' => 'Arka e POS-it',
        'payment_mode' => 'Mënyra e pagesës',
        'amount_to_be_paid' => 'Shuma për t\'u paguar',
        'customer_given_amount' => 'Shuma e dhënë nga klienti',
        'change_return' => 'Kusuri',
        'payments' => 'Pagesat',
        'payments.*.method' => 'Metoda e pagesës',
        'payments.*.amount' => 'Shuma',
        'payments.*.transaction_id' => 'ID e transaksionit',
        'payments.*.gift_card_code' => 'Kodi i kartës dhuratë',
    ],

    'print' => [
        'register_id' => 'Arka e POS-it',
        'branch_id' => 'Dega',
    ],
];
