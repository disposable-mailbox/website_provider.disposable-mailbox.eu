---
lang: de
title: webring
---

# alle diese Seiten nutzen oder basieren auf [disposable-mailbox](https://github.com/disposable-mailbox/disposable-mailbox)
# all of these sites use or are based on [disposable-mailbox](https://github.com/disposable-mailbox/disposable-mailbox)


## links re:
<ul class="posts"> 
{% assign sortedposts = site.categories.webring | sort: 'post_date' | reverse %} 
{% for post in sortedposts %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>

## links :
<ul class="posts"> 
{% assign posts = site.categories.webring | sort: 'post_date' %} 
{% for post in site.categories.webring %} <li><span>{{ post.date | date_to_string }}</span> » <a href="{{ post.url }}" title="{{ post.title }}">{{ post.title }}</a></li> {% endfor %} </ul>
