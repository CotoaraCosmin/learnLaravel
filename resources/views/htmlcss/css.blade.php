@extends('layouts.app')
<!--CSS Page-->
@section('content')
      <h2>{{$title}}</h2>
      <p>Cascading Style Sheets (CSS) tell the browser how to display the text and other content that you write in HTML.</p>
      <p>Note that CSS is case-sensitive so be careful with your capitalization. CSS has been adopted by all major browsers and allows you to control:</p>
       @foreach($options as $option)
        <ul>
            <li>{{$option}}</li>
        </ul>
      @endforeach
      <p>There are three main ways to apply CSS styling. You can apply inline styles directly to HTML elements with the style attribute. Alternatively, you can place CSS rules within style tags in an HTML document. Finally, you can write CSS rules in an external style sheet, then reference that file in the HTML document. Even though the first two options have their use cases, most developers prefer external style sheets because they keep the styles separate from the HTML elements. This improves the readability and reusability of your code. The idea behind CSS is that you can use a selector to target an HTML element in the DOM (Document Object Model) and then apply a variety of attributes to that element to change the way it is displayed on the page.</p>
      <h4>Upcoming Lessons</h4>
      <ul class="list-group">
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/change-the-color-of-text/" target="_blank">Change the Color of Text</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-css-selectors-to-style-elements/" target="_blank">Use CSS Selectors to Style Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-a-css-class-to-style-an-element/" target="_blank">Use a CSS Class to Style an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/style-multiple-elements-with-a-css-class/" target="_blank">Style Multiple Elements with a CSS Class</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/change-the-font-size-of-an-element/" target="_blank">Change the Font Size of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/set-the-font-family-of-an-element/" target="_blank">Set the Font Family of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/import-a-google-font/" target="_blank">Import a Google Font</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/specify-how-fonts-should-degrade/" target="_blank">Specify How Fonts Should Degrade</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/size-your-images/" target="_blank">Size Your Images</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/add-borders-around-your-elements/" target="_blank">Add Borders Around Your Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/add-rounded-corners-with-border-radius/" target="_blank">Add Rounded Corners with border-radius</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/make-circular-images-with-a-border-radius/" target="_blank">Make Circular Images with a border-radius</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/give-a-background-color-to-a-div-element/" target="_blank">Give a Background Color to a div Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-an-id-attribute-to-style-an-element/" target="_blank">Set the id of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/adjust-the-padding-of-an-element/" target="_blank">Adjust the Padding of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/adjust-the-margin-of-an-element/" target="_blank">Adjust the Margin of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/add-a-negative-margin-to-an-element/" target="_blank">Add a Negative Margin to an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/add-different-padding-to-each-side-of-an-element/" target="_blank">Add Different Padding to Each Side of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/add-different-margins-to-each-side-of-an-element/" target="_blank">Add Different Margins to Each Side of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-clockwise-notation-to-specify-the-padding-of-an-element/" target="_blank">Use Clockwise Notation to Specify the Padding of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-clockwise-notation-to-specify-the-margin-of-an-element/" target="_blank">Use Clockwise Notation to Specify the Margin of an Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-attribute-selectors-to-style-elements/" target="_blank">Use Attribute Selectors to Style Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/understand-absolute-versus-relative-units/" target="_blank">Understand Absolute versus Relative Units</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/style-the-html-body-element/" target="_blank">Style the HTML Body Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/inherit-styles-from-the-body-element/" target="_blank">Inherit Styles from the Body Element</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/prioritize-one-style-over-another/" target="_blank">Prioritize One Style Over Another</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/override-styles-in-subsequent-css/" target="_blank">Override Styles in Subsequent CSS</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/override-class-declarations-by-styling-id-attributes/" target="_blank">Override Class Declarations by Styling ID Attributes</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/override-class-declarations-with-inline-styles/" target="_blank">Override Class Declarations with Inline Styles</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/override-all-other-styles-by-using-important/" target="_blank">Override All Other Styles by using Important</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-hex-code-for-specific-colors/" target="_blank">Use Hex Code for Specific Colors</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-hex-code-to-mix-colors/" target="_blank">Use Hex Code to Mix Colors</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-abbreviated-hex-code/" target="_blank">Use Abbreviated Hex Code</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-rgb-values-to-color-elements/" target="_blank">Use RGB values to Color Elements</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-rgb-to-mix-colors/" target="_blank">Use RGB to Mix Colors</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-css-variables-to-change-several-elements-at-once/" target="_blank">Use CSS Variables to change several elements at once</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/create-a-custom-css-variable/" target="_blank">Create a custom CSS Variable</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-a-custom-css-variable/" target="_blank">Use a custom CSS Variable</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/attach-a-fallback-value-to-a-css-variable/" target="_blank">Attach a Fallback value to a CSS Variable</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/improve-compatibility-with-browser-fallbacks/" target="_blank">Improve Compatibility with Browser Fallbacks</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/cascading-css-variables/" target="_blank">Cascading CSS variables</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/change-a-variable-for-a-specific-area/" target="_blank">Change a variable for a specific area</a></li>
            <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/basic-css/use-a-media-query-to-change-a-variable/" target="_blank">Use a media query to change a variable</a></li>
      </ul>
@endsection      