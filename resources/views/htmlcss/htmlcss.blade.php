@extends('layouts.app')

@section('content')
      <h2>{{$title}}</h2>
      <p>HTML, or HyperText Markup Language, is a markup language used to describe the structure of a web page. It uses a special syntax or notation to organize and give information about the page to the browser. Elements usually have opening and closing tags that surround and give meaning to content. For example, there are different tag options to place around text to show whether it is a heading, a paragraph, or a list.</p>
      <p>For example:</p>
      <div class="card">
            <div class="card-header">
            <h1>Top level heading: Maybe a page title</h1>
            <p>A paragraph of text. Some information we would like to communicate to the viewer. This can be as long or short as we would like.</p>
            <ol>
              <li>Number one on the list</li>
              <li>Number two</li>
              <li>A third item</li>
            </ol>
            </div>
      </div>
      <p>The HyperText part of HTML comes from the early days of the web and its original use case. Pages usually contained static documents that contained references to other documents. These references contained hypertext links used by the browser to navigate to the reference document so the user could read the reference document without having to manually search for it.</p>
      <p>As web pages and web applications grow more complex, the W3 Consortium updates the HTML specification to ensure that a webpage can be shown reliably on any browser. The latest version of HTML is HTML5.</p>
      <p>This section introduces how to use HTML elements to give structure and meaning to your web content.</p>
      <h4>Upcoming Lessons</h4>
      <ul class="list-group">
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/say-hello-to-html-elements/" target="_blank">Say Hello to HTML Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/headline-with-the-h2-element/" target="_blank">Headline with the h2 Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/inform-with-the-paragraph-element/" target="_blank">Inform with the Paragraph Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/fill-in-the-blank-with-placeholder-text/" target="_blank">Fill in the Blank with Placeholder Text</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/uncomment-html/" target="_blank">Uncomment HTML</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/comment-out-html/" target="_blank">Comment out HTML</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/delete-html-elements/" target="_blank">Delete HTML Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/introduction-to-html5-elements/" target="_blank">Introduction to HTML5 Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/add-images-to-your-website/" target="_blank">Add Images to Your Website</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/link-to-external-pages-with-anchor-elements/" target="_blank">Link to External Pages with Anchor Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/link-to-internal-sections-of-a-page-with-anchor-elements/" target="_blank">Link to Internal Sections of a Page with Anchor Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/nest-an-anchor-element-within-a-paragraph/" target="_blank">Nest an Anchor Element within a Paragraph</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/make-dead-links-using-the-hash-symbol/" target="_blank">Make Dead Links Using the Hash Symbol</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/turn-an-image-into-a-link/" target="_blank">Turn an Image into a Link</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-a-bulleted-unordered-list/" target="_blank">Create a Bulleted Unordered List</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-an-ordered-list/" target="_blank">Create an Ordered List</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-a-text-field/" target="_blank">Create a Text Field</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/add-placeholder-text-to-a-text-field/" target="_blank">Add Placeholder Text to a Text Field</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-a-form-element/" target="_blank">Create a Form Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/add-a-submit-button-to-a-form/" target="_blank">Add a Submit Button to a Form</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/use-html5-to-require-a-field/" target="_blank">Use HTML5 to Require a Field</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-a-set-of-radio-buttons/" target="_blank">Create a Set of Radio Buttons</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/create-a-set-of-checkboxes/" target="_blank">Create a Set of Checkboxes</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/check-radio-buttons-and-checkboxes-by-default/" target="_blank">Check Radio Buttons and Checkboxes by Default</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/nest-many-elements-within-a-single-div-element/" target="_blank">Nest Many Elements within a Single div Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/declare-the-doctype-of-an-html-document/" target="_blank">Declare the Doctype of an HTML Document</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-html-and-html5/define-the-head-and-body-of-an-html-document/" target="_blank">Define the Head and Body of an HTML Document</a></li>       
      </ul>
@endsection