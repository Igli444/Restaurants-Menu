<?php

return [
    'order_types' => [
        'dine_in' => 'Në vend',
        'delivery' => 'Dërgesë',
        'pick_up' => 'Merr vetë',
        'takeaway' => 'Për të marrë',
        'drive_thru' => 'Drive-Thru',
        'pre_order' => 'Porosi paraprake',
        'catering' => 'Katering',
    ],

    'order_statuses' => [
        'pending' => 'Në pritje',
        'confirmed' => 'E konfirmuar',
        'preparing' => 'Në përgatitje',
        'ready' => 'Gati',
        'served' => 'Shërbyer',
        'completed' => 'E përfunduar',
        'cancelled' => 'E anuluar',
        'refunded' => 'E rimbursuar',
        'merged' => 'E bashkuar',
    ],

    'order_payment_statuses' => [
        'unpaid' => 'E papaguar',
        'paid' => 'E paguar',
        'partially_paid' => 'Pjesërisht e paguar',
    ],

    'reason_types' => [
        'cancellation' => 'Anulim',
        'refund' => 'Rimbursim',
    ],

    'order_product_statuses' => [
        'pending' => 'Në pritje',
        'preparing' => 'Në përgatitje',
        'ready' => 'Gati',
        'served' => 'Shërbyer',
        'cancelled' => 'E anuluar',
        'refunded' => 'E rimbursuar',
    ],

    'discount_types' => [
        'discount' => 'Zbritje',
        'voucher' => 'Kupon',
    ],

    'order_charge_codes' => [
        'delivery_fee' => 'Tarifa e dërgesës',
        'small_order_surcharge' => 'Tarifa shtesë për porosi të vogël',
        'peak_time_surcharge' => 'Tarifa shtesë e orës së ngarkuar',
        'tip' => 'Bakshish',
        'service_charge' => 'Tarifa e shërbimit',
    ],

    'order_sources' => [
        'table_qr' => 'QR i tavolinës',
    ],
];
