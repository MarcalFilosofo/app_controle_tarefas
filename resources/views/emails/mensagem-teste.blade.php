@component('mail::message')
# Introduction

Corpo da mensagem

- Opção 1
- Opção 2
- Opção 3

@component('mail::button', ['url' => ''])
Botão 1
@endcomponent

@component('mail::button', ['url' => ''])
Botão 2
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
