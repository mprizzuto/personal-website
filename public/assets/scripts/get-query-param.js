const searchParams = new URLSearchParams(document.location.search);

let pageQuery = searchParams.get("page");

let slugQuery = searchParams.get("slug");

function createCssLink(url, rel) {
  let link = document.createElement("link");

  link.href = url;
  link.rel = rel;
  console.log(url, rel);
  return link;
}

function appendCssLinkToHead(url, rel) {
  // get head
  // call createCssLink(url, rel)
  // append to head

  let head = document.querySelector("head");

  let createLink = createCssLink(url, rel);
  head.append(createLink);
}

function renderStyles(pageQuery, slugQuery) {
  if (pageQuery === "project") {
    if (slugQuery === "responsive-layout-garden") {
      appendCssLinkToHead("./assets/styles/project-styles/layout-garden/style.css", "stylesheet");
    }

    if (slugQuery === "theming-challenge") {
      appendCssLinkToHead("./assets/styles/project-styles/theming-challenge/css/style.css", "stylesheet");
    }
  }

}

renderStyles(pageQuery, slugQuery);

// console.log(typeof pageQuery, pageQuery);


