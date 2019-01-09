@extends('layouts.app')
<!--Applied Accessibility Page -->
@section('content')
<h2>{{$title}}</h2>
<p>"Accessibility" generally means having web content and a user interface that can be understood, navigated, and interacted with by a broad audience. This includes people with visual, auditory, mobility, or cognitive disabilities. Websites should be open and accessible to everyone, regardless of a user's abilities or resources. Some users rely on assistive technology such as a screen reader or voice recognition software. Other users may be able to navigate through a site only using a keyboard. Keeping the needs of various users in mind when developing your project can go a long way towards creating an open web. Here are three general concepts this section will explore throughout the following challenges:</p>
 @foreach($options as $option)
   <ul>
        <li>{{$option}}</li>
   </ul>    
 @endforeach
<p>Having accessible web content is an ongoing challenge. A great resource for your projects going forward is the W3 Consortium's Web Content Accessibility Guidelines (WCAG). They set the international standard for accessibility and provide a number of criteria you can use to check your work.</p>
<h4>Upcoming Lessons</h4>
<ul class="list-group">
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/add-a-text-alternative-to-images-for-visually-impaired-accessibility/" target="_blank">Add a Text Alternative to Images for Visually Impaired Accessibility</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/know-when-alt-text-should-be-left-blank/" target="_blank">Know When Alt Text Should be Left Blank</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/use-headings-to-show-hierarchical-relationships-of-content/" target="_blank">Use Headings to Show Hierarchical Relationships of Content</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/jump-straight-to-the-content-using-the-main-element/" target="_blank">Jump Straight to the Content Using the main Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/wrap-content-in-the-article-element/" target="_blank">Wrap Content in the article Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-header-landmark/" target="_blank">Make Screen Reader Navigation Easier with the header Landmark</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-nav-landmark/" target="_blank">Make Screen Reader Navigation Easier with the nav Landmark</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/make-screen-reader-navigation-easier-with-the-footer-landmark/" target="_blank">Make Screen Reader Navigation Easier with the footer Landmark</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/improve-accessibility-of-audio-content-with-the-audio-element/" target="_blank">Improve Accessibility of Audio Content with the audio Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/improve-chart-accessibility-with-the-figure-element/" target="_blank">Improve Chart Accessibility with the figure Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/improve-form-field-accessibility-with-the-label-element/" target="_blank">Improve Form Field Accessibility with the label Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/wrap-radio-buttons-in-a-fieldset-element-for-better-accessibility/" target="_blank">Wrap Radio Buttons in a fieldset Element for Better Accessibility</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/add-an-accessible-date-picker/" target="_blank">Add an Accessible Date Picker</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/standardize-times-with-the-html5-datetime-attribute/" target="_blank">Standardize Times with the HTML5 datetime Attribute</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/make-elements-only-visible-to-a-screen-reader-by-using-custom-css/" target="_blank">Make Elements Only Visible to a Screen Reader by Using Custom CSS</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/improve-readability-with-high-contrast-text/" target="_blank">Improve Readability with High Contrast Text</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/avoid-colorblindness-issues-by-using-sufficient-contrast/" target="_blank">Avoid Colorblindness Issues by Using Sufficient Contrast</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/avoid-colorblindness-issues-by-carefully-choosing-colors-that-convey-information/" target="_blank">Avoid Colorblindness Issues by Carefully Choosing Colors that Convey Information</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/give-links-meaning-by-using-descriptive-link-text/" target="_blank">Give Links Meaning by Using Descriptive Link Text</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/make-links-navigatable-with-html-access-keys/" target="_blank">Make Links Navigatable with HTML Access Keys</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/use-tabindex-to-add-keyboard-focus-to-an-element/" target="_blank">Use tabindex to Add Keyboard Focus to an Element</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-accessibility/use-tabindex-to-specify-the-order-of-keyboard-focus-for-several-elements/" target="_blank">Use tabindex to Specify the Order of Keyboard Focus for Several Elements</a></li>
</ul>        
@endsection