{# ... #}
	<form action="{{ path('login_check') }}" method="post">
    {# ... the login fields #}

	    <input type="hidden" name="_csrf_token"
	           value="{{ csrf_token('authenticate') }}">

    <button type="submit">login</button>
</form>




