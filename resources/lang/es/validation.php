<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_equals'          => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser una dirección de correo válida.',
    'ends_with'            => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'exists'               => 'El campo :attribute seleccionado no existe.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El campo :attribute debe ser mayor a :value.',
        'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener más de :value caracteres.',
        'array'   => 'El campo :attribute debe contener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o más caracteres.',
        'array'   => 'El campo :attribute debe contener :value o más elementos.',
    ],
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener menos de :value caracteres.',
        'array'   => 'El campo :attribute debe contener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o menos caracteres.',
        'array'   => 'El campo :attribute debe contener :value o menos elementos.',
    ],
    'max'                  => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file'    => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'string'  => 'El campo :attribute no debe contener más de :max caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del campo :attribute es inválido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio.',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with'          => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El valor del campo :attribute ya está en uso.',
    'uploaded'             => 'El campo :attribute no se pudo subir.',
    'url'                  => 'El formato del campo :attribute es inválido.',
    'uuid'                 => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'market_platforms.*.access_token' => [
            'unique' => 'Uno de los acces tokens enviados ya estan en uso',
        ],
        'packages_ids.*' => [
            'exists' => 'Uno de los paquetes seleccionados no te pertenece o no es valido.',
        ],
        'pickup_time_id' => [
            'exists' => 'La hora de recolecta seleccionada no existe, o no te pertenece.',
        ],
        'pickup_ids.*' => [
            'exists' => 'El pickup ya esta asignado a un domiciliario, o no tiene un estatus pendiente',
        ],
        'client_ids.*' => [
            'exists' => 'Uno de los clientes seleccionados ya esta asignado al domiciliario seleccionado, o no esta aprobado aun.',
        ],
        'domiciliary_ids.*' => [
            'exists' => 'Uno de los domiciliarios seleccionados no esta en nuestra base de datos, o no esta aprobado aun.',
        ],
        'market_platforms.*.market_id' => [
            'unique' => 'El marketplace seleccionado ya existe en nuestros registros',
            'distinct' => 'El marketplace seleccionado debe ser distinto a los demas marketplace enviados.',
            'exists' => 'El marketplace seleccionado ya existe en nuestros registros'
        ],
        'orders_ids.*'=> [
            'unique' => 'El paquete ya se encuentra en nuestros registros.'
        ],
        'package_ids.*' => [
            'exists' => 'El paquete seleccionado no existe o no coincide con el pickup enviado.'
        ],
        "postal_codes.*.number" => [
            'unique' => 'El codigo postal ya esta en uso.'
        ]
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'fantasy_name' => 'Razon social',
        'market_place_ids' => 'Marketplaces',
        'market_place_ids.*.id' => 'identificador del marketplace',
        'market_place_ids.*.access_token' => 'Access token',
        'pickup_times' => 'Horas de recolecta',
        'phone' => 'Telefono',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmacion de contraseña',
        'payment_condition' => 'Condicion de pago',
        'location' => 'Localizacion',
        'iva_condition' => 'Condicion frente al iva',
        'address' => 'Direccion',
        'postal_code' => 'Codigo postal',
        'type_document_id' => 'Tipo de documento',
        'business_name' => 'Nombre de la empresa',
        "orders_ids"    => "Identificador de las ordenes",
        "platform_id"   => "Identificador de la plataforma",
        "pickup_time_id"    => "Identificador de la hora de recolecta",
        "client_id" => "Identificador del cliente",
        "packages_ids" => "identificador de paquetes",

        "document" => "numero de documento",
        "state" => "estado",
        "city" => "ciudad",
        "name" => "nombre",
        "vehicle_brand" => "marca del vehiculo",
        "vehicle_model" => "modelo del vehiculo",
        "insurance" => "numero de seguro",
        "license" => "licencia",
        "green_dni" => "dni verde",
        "license_expiration_date" => "fecha de expiracion de la licencia",
        "bank_id" => "identificador del banco",
        "number_account" => "numero de cuenta",
        "type_account_bank_id" => "identificador del tipo de cuenta",
        "type" => "tipo de asistencia",
        "reason" => "motivo de inasistencia",

        "market_platforms" => "plataformas de mercado",
        "market_platforms.*.platform_id" => "identificador de la platafroma",
        "pickup_times.*.id" => "identificador de la hora de recolecta",

        "role_name" => "nombre del rol",

        "file" => "archivo",
        "packages_ids.*" => "paquetes",
        "lastname" => "apellido",
        "movil_phone" => "telefono movil",

        "packages.*.destinatario" => "destinatario",
        "packages.*.direccion" => "direccion",
        "packages.*.localidad" => "localidad",
        "packages.*.codigo_postal" => "codigo postal",
        "packages.*.telefono" => "telefono",
        "packages.*.tipo_de_entrega" => "tipo de entrega",
        "packages.*.condicion_de_entrega" => "condicion de entrega",
        "packages.*.correo" => "correo",
        "packages.*.monto_a_pagar" => "monto a pagar",
        "packages.*.fecha_de_venta" => "vecha de venta",
        "orders_ids.*" => "orden",
        "package_ids.*" => "paquete",
        "pickup_id" => "pickup",
        "postal_codes.*.number" => "codigo postal",
        "condition" => "condicion de venta",
        'email' => "correo electrónico",
        "zone_id"=>"localidad",
        "lat"=>"latitud",
        "long"=>"longitud",
        "parent_zone_id"=>"zona",
        "branch_office_id"=>"sucursal",
        "branch_country_id"=>"pais de la sucursal",
        "deposit_id"=>"deposito",
        "domiciliary_id"=>"domiciliario",
        "coordinator"=>"administrativo",//coordinador
        "adminBranch"=>"jefe de operaciones",//administrador de sucursal
        "facturation"=>"coordinador",//facturación
        "pickupCoordinator"=>"coordinador de pickUp",
        "auxCoordinator"=>"auxiliar de coordinación",
        "devolutions"=>"devoluciones",
        "discharge"=>"descarga",
        "support"=>"soporte",
        "fullfilment"=>"fullfilment",

        // Account Payment request
        "account_id" => "cuenta",
        "transaction_number" => "numero de transacción",
        "amount_payed" => "monto",
        "payment_date" => "fecha de pago",
        "observations" => "observaciones",
        "status" => "estatus",
        "account_payment_types_id" => "forma de pago",


        // Account item request
        "title" => "título",
        "package_id" => "paquete",
        "amount" => "monto",
        "account_item_type_id" => "tipo de item",
        "discount_type" => "tipo de descuento",

        "payment" => 'pago',
        "vehicle_type_id" => 'tipo de vehiculo',
    ],
    'values' => [
        'role_name' => [
            "coordinator"=>"administrativo",//coordinador
            "adminBranch"=>"jefe de operaciones",//administrador de sucursal
            "facturation"=>"coordinador",//facturación
            "admin"=>"administrador",
            "domiciliary"=>"domiciliario",
            "pickupCoordinator"=>"coordinador de pickUp",
            "auxCoordinator"=>"auxiliar de coordinación",
            "devolutions"=>"devoluciones",
            "discharge"=>"descarga",
            "support"=>"soporte",
            "fullfilment"=>"fullfilment",
         ],
     ],

];
