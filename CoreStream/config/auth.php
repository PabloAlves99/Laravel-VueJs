<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */
    /*
    |---------------------------------------------------------------- -------------------------
    | Padrões de autenticação
    |---------------------------------------------------------------- -------------------------
    |
    | Esta opção define o "guard" e a senha de autenticação padrão
    | redefina o "corretor" para seu aplicativo. Você pode alterar esses valores
    | conforme necessário, mas são um começo perfeito para a maioria das aplicações.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | which utilizes session storage plus the Eloquent user provider.
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | Supported: "session"
    |
    */
    /*
    |---------------------------------------------------------------- -------------------------
    | Protetores de autenticação
    |---------------------------------------------------------------- -------------------------
    |
    | A seguir, você pode definir cada proteção de autenticação para seu aplicativo.
    | Claro, uma ótima configuração padrão foi definida para você
    | que utiliza armazenamento de sessão mais o provedor de usuário Eloquent.
    |
    | Todos os protetores de autenticação possuem um provedor de usuário, que define como o
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | sistema utilizado pela aplicação. Normalmente, o Eloquent é utilizado.
    |
    | Suportado: "sessão"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | If you have multiple user tables or models you may configure multiple
    | providers to represent the model / table. These providers may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */
    /*
    |---------------------------------------------------------------- -------------------------
    | Provedores de usuários
    |---------------------------------------------------------------- -------------------------
    |
    | Todos os protetores de autenticação possuem um provedor de usuário, que define como o
    | os usuários são realmente recuperados do seu banco de dados ou outro armazenamento
    | sistema utilizado pela aplicação. Normalmente, o Eloquent é utilizado.
    |
    | Se você tiver várias tabelas ou modelos de usuários, poderá configurar vários
    | provedores para representar o modelo/tabela. Esses provedores poderão então
    | ser atribuído a quaisquer guardas de autenticação extras que você definiu.
    |
    | Suportado: "banco de dados", "eloquente"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the behavior of Laravel's password
    | reset functionality, including the table utilized for token storage
    | and the user provider that is invoked to actually retrieve users.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */
    /*
    |---------------------------------------------------------------- -------------------------
    | Redefinindo senhas
    |---------------------------------------------------------------- -------------------------
    |
    | Estas opções de configuração especificam o comportamento da senha do Laravel
    | funcionalidade de redefinição, incluindo a tabela utilizada para armazenamento de token
    | e o provedor de usuário que é invocado para realmente recuperar usuários.
    |
    | O tempo de expiração é o número de minutos que cada token de redefinição será
    | considerado válido. Este recurso de segurança mantém os tokens de curta duração, então
    | eles têm menos tempo para serem adivinhados. Você pode alterar isso conforme necessário.
    |
    | A configuração do acelerador é o número de segundos que um usuário deve esperar antes
    | gerando mais tokens de redefinição de senha. Isso evita que o usuário
    | gerando rapidamente uma grande quantidade de tokens de redefinição de senha.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | window expires and users are asked to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */
    /*
    |---------------------------------------------------------------- -------------------------
    | Tempo limite de confirmação de senha
    |---------------------------------------------------------------- -------------------------
    |
    | Aqui você pode definir quantos segundos antes da confirmação da senha
    | janela expira e os usuários são solicitados a digitar novamente sua senha por meio do
    | tela de confirmação. Por padrão, o tempo limite dura três horas.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
