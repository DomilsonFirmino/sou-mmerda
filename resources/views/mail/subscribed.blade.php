<x-mail::message>

<h1>Olá! 👋 {{ $subscriber->name }}</h1>

<p>Estamos muito felizes em tê-lo(a) conosco! Obrigado por subscrever à nossa newsletter. A partir de agora, você receberá as últimas novidades, conteúdos exclusivos e atualizações diretamente no seu e-mail.</p>

<p>Fique atento(a) para não perder nenhuma novidade! Se tiver alguma dúvida ou sugestão, estamos sempre por aqui para ajudar.</p>

<p>Vamos juntos nessa jornada! 🌟</p>

<p>Please confirm your email with the link bellow</p>

<div>
    <a href="{{ url('/subscribe/'. $subscriber->hash)}}">Verificar email</a>
    <a href="{{ url('/unsubscribe/'. $subscriber->delete)}}">remover subscrição</a>
</div>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
