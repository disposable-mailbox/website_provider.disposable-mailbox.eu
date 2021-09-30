---
layout: default-nl
---
[Startpagina]({{ site.url }}/nl/) - [Dit is hoe het werkt]({{ site.url }}/nl/about.html) - [Waarom e-mails weggooien?]({{ site.url }}/nl/why.html) - [FAQ]({{ site.url }}/nl/FAQ.html) - [Nieuws]({{ site.url }}/nl/news.html) 

---

# Nieuws

<h1>{{ page.title }}</h1> <ul class="posts"> {% for post in site.categories.nl %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
