# Portfolio Website Ver1
The first version of my portfolio website

## Table of Contents
1. <b>[Work](https://github.com/cmdlhz/portfolio_website_ver1#1-work)</b>
2. <b>[Writings](https://github.com/cmdlhz/portfolio_website_ver1#2-writings)</b>
3. <b>[About](https://github.com/cmdlhz/portfolio_website_ver1#3-about)</b>
4. <b>[Account](https://github.com/cmdlhz/portfolio_website_ver1#4-account)</b>
5. <b>[Navigation](https://github.com/cmdlhz/portfolio_website_ver1#5-navigation)</b>
6. <b>[General](https://github.com/cmdlhz/portfolio_website_ver1#6-general)</b>
7. <b>[Useful Info](https://github.com/cmdlhz/portfolio_website_ver1#7-useful-info)</b>
    - 7.1. [GitHub README Markdown : Useful Techniques](https://github.com/cmdlhz/portfolio_website_ver1#71-github-markdown--useful-techniques)
    - 7.2. [How to Use GitHub](https://github.com/cmdlhz/portfolio_website_ver1#72-how-to-use-github)
8. <b>[References](https://github.com/cmdlhz/portfolio_website_ver1#8-references)</b>
    - 8.1. [Front-end](https://github.com/cmdlhz/portfolio_website_ver1#81-front-end)
    - 8.2. [Back-end](https://github.com/cmdlhz/portfolio_website_ver1#82-back-end)
    - 8.3. [DB](https://github.com/cmdlhz/portfolio_website_ver1#83-db)
    - 8.4. [Etc](https://github.com/cmdlhz/portfolio_website_ver1#84-etc)
    - 8.5. [Inspirations](https://github.com/cmdlhz/portfolio_website_ver1#85-inspirations)
9. <b>[Built With](https://github.com/cmdlhz/portfolio_website_ver1#9-built-with)</b>
10. <b>[Coming Up](https://github.com/cmdlhz/portfolio_website_ver1#10-coming-up)</b>
11. <b>[Contributing](https://github.com/cmdlhz/portfolio_website_ver1#11-contributing)</b>
12. <b>[License](https://github.com/cmdlhz/portfolio_website_ver1#12-license)</b>
- - -

# 1. Work 
- - -

# 2. Writings 
- - -

# 3. About 
- - -

# 4. Account 
## 4.1. Internal Sign Up Page

## 4.2. Log In Page

## 4.3. Social(External) Login
### 4.3.1. KakaoTalk

### 4.3.2. Facebook

### 4.3.3. Google

### 4.3.4. GitHub

### 4.3.5. Twitter

### 4.3.6. WhatsApp

## 4.4. Account Page
### 4.4.1. Regex Patterns
- username: `/^[a-z\d]{3,12}$/i`
    + `\d` : matches any digit character (*same as `[0–9]`*)
    + `/i` : case insensitive
- password: `/^[\w@-]{8,20}$/`
    + `\w` : matches any word character (a-z, A-Z, 0–9, and _)
    + `@-` : matches a single character in the list (*case sensitive*)
- email: `/^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/`
    + `\.` : matches the character `.` literally (*case sensitive*)
    + `-` : matches the character `-` literally (*case sensitive*)

### 4.4.2. Screenshots
[![website-3.png](https://i.postimg.cc/6pSy7NVM/website-3.png)](https://postimg.cc/0zY83FBS)
[![website-2.png](https://i.postimg.cc/jdMWbfD0/website-2.png)](https://postimg.cc/KRgc7R7J)
[![website-1.png](https://i.postimg.cc/pXW94CXJ/website-1.png)](https://postimg.cc/YjPqm1Fv)

- - -

# 5. Navigation 
## 5.1. Header
### 5.1.1. ARIA 
[Accessible Rich Internet Applications (ARIA)](https://www.w3.org/TR/wai-aria-1.1/) is a set of attributes that define ways to make web content and web applications (especially those developed with JavaScript) more accessible to people with disabilities.
- Adding `aria-haspopup="true"` to the parent of the dropdown menu to indicates an alternative state.
- `aria-expanded="false"` & `aria-expanded="true"` shows that whether the alternative state is expanded or not.
- Including `aria-label="submenu"` on the actual dropdown menu itself shows that it's a submenu.


## 5.2. Footer
- - -

# 6. General 
- - -

# 7. Useful Info
## 7.1. GitHub README Markdown : Useful Techniques 
Please check out [this markdown](https://github.com/cmdlhz/SaferTrip_JL#61-github-markdown--useful-techniques).

## 7.2. How to Use GitHub
### 7.2.1. Why use GitHub Desktop?
[GitHub Desktop](https://desktop.github.com/) allows us to do following:
* Attribute commits with collaborators easily
* Checkout branches with pull requests and view CI statuses 
* See syntax highlighted differences

### 7.2.2. How to change git commit message after push
<b>[ STEP 1 ]</b>
`git commit --amend -m` "NEW COMMIT MESSAGE" ([StackOverflow](https://stackoverflow.com/a/41518764/10021131))

<b>[ STEP 2 ]</b>
FAILED: "`git push --force`" & "`git push origin master`"
SUCCEED: "`git push origin HEAD --force`" ([StackOverlfow](https://stackoverflow.com/a/1338744/10021131))
- - -

# 8. References 
## 8.1. Front-end
### Overall
* <b>Testing</b>
    - [HTML-CSS-JS](https://html-css-js.com/): An online tool collection of HTML, CSS, JS
    - GreenSock
        + [GreenSock Ease Visualizer](https://greensock.com/ease-visualizer): `Power 0-4`, `Back`, `Elastic`, `Bounce`, `Rough`, `SlowMo`, `Stepped`, `Circ`, `Expo`, `Sine`
    - [Regex 101](https://regex101.com/): a regular expression debugger 
* <b>Tutorials</b>
    - GreenSock
        + [GreenSock for Beginners](https://bit.ly/2IBc8la) on YouTube by [Petr Tichy](https://twitter.com/ihatetomatoes)
    - ScrollMagic
        + [ScrollMagic for Beginners](https://bit.ly/2IBc8la) on YouTube by [Petr Tichy](https://twitter.com/ihatetomatoes)

### CSS
* <b>Testing</b>
    - [Cubic-bezier](http://cubic-bezier.com): A transition effect with variable speed from start to end
    - [Color Picker](https://www.w3schools.com/colors/colors_picker.asp): Comparing similar colors
* <b>Collections</b>
    - [30 Seconds of CSS](https://30-seconds.github.io/30-seconds-of-css/): A curated collection of useful CSS snippets
* <b>Tutorials</b>
    - [Flexbox Froggy](https://flexboxfroggy.com/): A game for learning CSS flexbox
    - [Grid Garden](http://cssgridgarden.com/): A game for learning CSS grid layout
    - [CSS Animation Tutorial Series](https://www.youtube.com/playlist?list=PL4cUxeGkcC9iGYgmEd2dm3zAKzyCGDtM5) by [Net Ninja](https://www.youtube.com/channel/UCW5YeuERMmlnqo4oq8vwUpg)
* <b>Blogs</b>
    - [Solved with CSS! Dropdown Menus](https://css-tricks.com/solved-with-css-dropdown-menus/)

### JS


### Etc..
* <b>Collections</b>
    - [Giphy](https://giphy.com/)
    - [Emoji Cheat Sheet](https://www.webfx.com/tools/emoji-cheat-sheet/)
    - [Google Fonts : Korean](https://googlefonts.github.io/korean/)

## 8.2. Back-end

## 8.3. DB
* <b>Visualization</b>
    - [DrawSQL](https://drawsql.app/) : Create, visualize and collaborate on database entity relationship diagrams

## 8.4. Etc
* <b>Online Code Editor</b>
    - [StackBlitz](https://stackblitz.com/)
    - [Code SandBox](https://codesandbox.io/)
* <b>Authentication</b>
    - [OAuth 2.0](https://www.oauth.com/) : All about OAuth 2.0 Servers
    - Session vs Token Based Authentication @ [Medium](https://medium.com/@sherryhsu/session-vs-token-based-authentication-11a6c5ac45e4)
    - JWT authentication: When and how to use it @ [LogRocket](https://logrocket.com/blog/jwt-authentication-best-practices/)
* <b>Etc</b>
    - [Post Image](https://postimages.org/) : Get permanent links for images

## 8.5. Inspirations
* <b>Programming Work</b>
    - [Tania Rascia](https://www.taniarascia.com/)
    - [José Manuel Pérez](https://jmperezperez.com/projects/)

* <b>Website Design</b>
    - [Ji-hoon Suh](https://jihoonsuh.com/)
    - [Jeremiah Shaw](http://www.jermshaw.com/)
    - [Derek Mei](https://www.derekmei.com/)

* <b>Interactive Experience</b>
    - [Website Awards](https://www.awwwards.com/) : scores based on design, usability, creativity, content, and mobile
        + 12 Dishes @ [website](http://12dishes.com/), [awwards](https://www.awwwards.com/sites/around-the-world-in-12-dishes), and [youtube explanation](https://youtu.be/Wu7OHhdqT0c)
    - [Form Follows Function](http://fff.cmiscm.com/#!/main)
- - -

# 9. Bulit With
* <b>Front End</b>
    - HTML
    - CSS
        + [Sass](https://sass-lang.com/)
    - JavaScript
        + [GreenSock Animation Platform (GSAP)](https://greensock.com/gsap) : Professional-grade javascript animation for the modern web
        + [ScrollMagic](http://scrollmagic.io/) : Javascript library for magical scroll interactions
* <b>Back End</b>
    - [PHP](http://php.net/)
* <b>DB</b>
    - [MySQL](https://www.mysql.com/)
- - -

# 10. Coming Up
I plan to learn the following:
        
* <b>Front-end</b>
    - JavaScript
        + [30 Day Vanilla Coding Challenge](https://javascript30.com/) - [GitHub](https://github.com/wesbos/JavaScript30) 
    - [TypeScript](https://www.typescriptlang.org/) : a typed superset of JavaScript that compiles to plain JavaScriptii
    - [Vue](https://vuejs.org/)
        + [Vuetify](https://vuetifyjs.com/en/) : a material component framework for Vue apps
        + [NuxtJS](https://nuxtjs.org/) : a framework for creating a server-rendered Vue.js apps
        + [VeeValidate](https://baianat.github.io/vee-validate/) : Template Based Validation Framework for Vue.js
    - CSS
        + [Flexbox](https://flexbox.io/) by Wes Bos
        + [CSS Grid](https://cssgrid.io/) by Wes Bos
* <b>Back-end</b>
    - [Python](https://www.python.org/)
        + [Django](https://www.djangoproject.com/)
* <b>DB</b>
    - [MongoDB](https://www.mongodb.com/) : a cross-platform document-oriented database program (<i>No SQL!</i>)
    - [PostgreSQL](https://www.postgresql.org/) :  a powerful, open source object-relational database system
* <b>Etc</b>
    - [VIM](https://www.vim.org/) : a text editor (<i>Force you to use only the keyboard!</i>)
- - -

# 11. Contributing
If you see any typos or formatting errors in the website, please do not hesitate to open a pull request and fix it!
- - -

# 12. License
This project is open source and available under the [MIT License](https://github.com/cmdlhz/portfolio_website_ver1/blob/master/LICENSE).
- - -

2019 © Jen Lim 