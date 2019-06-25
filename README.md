# auto-redirect
A script to automatically redirect your user to the page they're probably looking for. 

This script is essentially a "I'm Feeling Lucky" button which queries Google's index (subsetting via Google CSE) and auto-redirects the user to the top result for the query. This script requires a well-configured Google Custom Search Engine (CSE).

The important bits:

* cx=<insert-your-cse-id-here> // This is the ID of your Google CSE. I'm using Cal Poly's as an example ( 016915822800209588117:65i6qz9rv3u -- I work here.)
  
* /customsearch/v1/siterestrict // site restrict depends on your query volume. I believe the limit is 10k per day and you have to have 10 or fewer domains in your CSE.

* &num=1&callback=hndlr // Limits the API call to one result (the top result), and calls the callback (hndlr)

* window.location.replace(item.link); // This is what will make the page redirect. The item.link is taken from the one API search result.
  
* Great reference: https://developers.google.com/custom-search/v1/using_rest
