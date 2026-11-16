<?php

return [
    'pos_registers' => [
        'name' => 'Emri',
        'branch_id' => 'Dega',
        'code' => 'Kodi',
        'note' => 'Shënim',
        'is_active' => 'Aktiv',
        'invoice_printer_id' => 'Printeri i faturave',
        'bill_printer_id' => 'Printeri i llogarisë',
        'waiter_printer_id' => 'Printeri i kamarierit',
        'delivery_printer_id' => 'Printeri i dërgesave',
    ],

    'pos_sessions' => [
        'branch_id' => 'Dega',
        'pos_register_id' => 'Arka e POS-it',
        'opening_float' => 'Fondi fillestar',
        'notes' => 'Shënime',
        'declared_cash' => 'Para në dorë të deklaruara',
        'closing_reason' => 'Arsyeja për mbylljen e seancës së një punonjësi tjetër',
        'variance_reason' => 'Arsyeja e diferencës në para',
    ],

    'pos_cash_movements' => [
        'pos_register_id' => 'Arka e POS-it',
        'reference' => 'Referenca',
        'amount' => 'Shuma',
        'notes' => 'Shënime',
        'reason' => 'Arsyeja',
        'direction' => 'Drejtimi',
    ],
];
