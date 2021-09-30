---
layout: default-es
---
[Página de inicio]({{ site.url }}/es/) - [Así es como funciona]({{ site.url }}/es/about.html) - [¿Por qué tirar los correos electrónicos?]({{ site.url }}/es/why.html) - [Preguntas más frecuentes]({{ site.url }}/es/FAQ.html) - [Noticias]({{ site.url }}/es/news.html) 

---

# Noticias

<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.es %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
