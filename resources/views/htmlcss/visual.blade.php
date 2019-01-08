@extends('layouts.app')

@section('content')
      <h2>{{$title}}</h2>
      <p>Visual Design in web development is a broad topic. It combines typography, color theory, graphics, animation, and page layout to help deliver a site's message. The definition of good design is a well-discussed subject, with many books on the theme.</p>
      <p>At a basic level, most web content provides a user with information. The visual design of the page can influence its presentation and a user's experience. In web development, HTML gives structure and semantics to a page's content, and CSS controls the layout and appearance of it.</p>
      <p>This section covers some of the basic tools developers use to create their own visual designs.</p>
      <h4>Upcoming Lessons</h4>
      <ul class="list-group">
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/create-visual-balance-using-the-text-align-property/" target="_blank">Create Visual Balance Using the text-align Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-width-of-an-element-using-the-width-property/" target="_blank">Adjust the Width of an Element Using the width Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-height-of-an-element-using-the-height-property/" target="_blank">Adjust the Height of an Element Using the height Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/use-the-strong-tag-to-make-text-bold/" target="_blank">Use the strong Tag to Make Text Bold</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/use-the-u-tag-to-underline-text/" target="_blank">Use the u Tag to Underline Text</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/use-the-em-tag-to-italicize-text/" target="_blank">Use the em Tag to Italicize Text</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/use-the-s-tag-to-strikethrough-text/" target="_blank">Use the s Tag to Strikethrough Text</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/create-a-horizontal-line-using-the-hr-element/" target="_blank">Create a Horizontal Line Using the hr Element</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-background-color-property-of-text/" target="_blank">Adjust the background-color Property of Text</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-size-of-a-header-versus-a-paragraph-tag/" target="_blank">Adjust the Size of a Header Versus a Paragraph Tag</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/add-a-box-shadow-to-a-card-like-element/" target="_blank">Add a box-shadow to a Card-like Element</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/decrease-the-opacity-of-an-element/" target="_blank">Decrease the Opacity of an Element</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/use-the-text-transform-property-to-make-text-uppercase/" target="_blank">Use the text-transform Property to Make Text Uppercase</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/set-the-font-size-for-multiple-heading-elements/" target="_blank">Set the font-size for Multiple Heading Elements</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/set-the-font-weight-for-multiple-heading-elements/" target="_blank">Set the font-weight for Multiple Heading Elements</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/set-the-font-size-of-paragraph-text/" target="_blank">Set the font-size of Paragraph Text</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/set-the-line-height-of-paragraphs/" target="_blank">Set the line-height of Paragraphs</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-hover-state-of-an-anchor-tag/" target="_blank">Adjust the Hover State of an Anchor Tag</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/change-an-elements-relative-position/" target="_blank">Change an Element's Relative Position</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/move-a-relatively-positioned-element-with-css-offsets/" target="_blank">Move a Relatively Positioned Element with CSS Offsets</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/lock-an-element-to-its-parent-with-absolute-positioning/" target="_blank">Lock an Element to its Parent with Absolute Positioning</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/lock-an-element-to-the-browser-window-with-fixed-positioning/" target="_blank">Lock an Element to the Browser Window with Fixed Positioning</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/push-elements-left-or-right-with-the-float-property/" target="_blank">Push Elements Left or Right with the float Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/change-the-position-of-overlapping-elements-with-the-z-index-property/" target="_blank">Change the Position of Overlapping Elements with the z-index Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/center-an-element-horizontally-using-the-margin-property/" target="_blank">Center an Element Horizontally Using the margin Property</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/learn-about-complementary-colors/" target="_blank">Learn about Complementary Colors</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/learn-about-tertiary-colors/" target="_blank">Learn about Tertiary Colors</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-color-of-various-elements-to-complementary-colors/" target="_blank">Adjust the Color of Various Elements to Complementary Colors</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-hue-of-a-color/" target="_blank">Adjust the Hue of a Color</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/adjust-the-tone-of-a-color/" target="_blank">Adjust the Tone of a Color</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/applied-visual-design/create-a-gradual-css-linear-gradient/" target="_blank">Create a Gradual CSS Linear Gradient</a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
        <li class="list-group-item"><a href="" target="_blank"></a></li>
      </ul>  
@endsection      