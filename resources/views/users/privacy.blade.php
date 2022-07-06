@extends('layouts.layout')

@section('body')

    <h2>Privacybeleid</h2>
    <br>
    <a href="{{route('privacy')}}#data-collected" id="data-collected"><h4><p style="color: #01a3c1;">1. Data collected:</p></h4></a>


    <h5>CONTACT FORM</h5>
    <p>
        Information submitted through the contact form on our site is sent to our company email, hosted by Zoho. Zoho adheres to
        the EU/US “Privacy Shield” policy and you can find more information about this here: Zoho Privacy Policy.
        These submissions are only kept for customer service purposes they are never used for marketing purposes or shared with third parties.
    </p>

    <div class="line"></div>

    <h5>GOOGLE ANALYTICS</h5>
    <p>
        GOOGLE ANALYTICS
        We use Google Analytics on our site for anonymous reporting of site usage.
        So, no personalized data is stored. If you would like to opt-out of Google Analytics monitoring
        your behavior on our website please use this link: <a href="https://tools.google.com/dlpage/gaoptout/" target="_blank" class="privacy-link">Google Analytics Opt-out.</a>
    </p>

    <div class="line"></div>

    <h5>CASES FOR USING THE PERSONAL DATA</h5>
    <p style="color: black;"><strong>We use your personal information in the following cases:</strong></p>
    <ul>
        <li>Verification/identification of the user during website usage;</li>
        <li>Providing Technical Assistance;</li>
        <li>Sending updates to our users with important information to inform about news/changes;</li>
        <li>Checking the accounts’ activity in order to prevent fraudulent transactions and ensure the security</li>
        <li>over our customers’ personal information;</li>
        <li>Customize the website to make your experience more personal and engaging;</li>
        <li>Guarantee overall performance and administrative functions run smoothly.</li>
    </ul>

    <div class="line"></div>

    <a href="{{route('privacy')}}#embedded-content" id="embedded-content"><h4><p style="color: #01a3c1;">2. Embedded content:</p></h4></a>


    <h5><p>GENERAL</p></h5>
    <p>
        Pages on this site may include embedded content, like YouTube videos, for example.
        Embedded content from other websites behaves in the exact same way as if you visited the other website.
    </p>
    <p>
        These websites may collect data about you, use cookies, embed additional third-party tracking,
        and monitor your interaction with that embedded content, including tracking your interaction with the embedded content
        if you have an account and are logged-in to that website. Below you can find a list of the services we use:
    </p>

    <div class="line"></div>

    <h5>FACEBOOK</h5>
    <p>
        The Facebook page plugin is used to display our Facebook timeline on our site.
        Facebook has its own cookie and privacy policies over which we have no control.
        There is no installation of cookies from Facebook and your IP is not sent to a Facebook server until you consent to it.
        See their privacy policy here: <a href="https://www.facebook.com/privacy/" target="_blank" class="privacy-link">Facebook Privacy Policy.</a>
    </p>

    <div class="line"></div>

    <h5>TWITTER</h5>

    <p>
        We use the Twitter API to display our tweets timeline on our site.
        Twitter has its own cookie and privacy policies over which we have no control.
        Your IP is not sent to a Twitter server until you consent to it. See their privacy policy here: <a href="https://twitter.com/privacy" target="_blank" class="privacy-link">Twitter Privacy Policy.</a>
    </p>
    <div class="line"></div>

    <h5>YOUTUBE</h5>

    <p>
        We use YouTube videos embedded on our site. YouTube has its own cookie and privacy policies over which we have no control.
        There is no installation of cookies from YouTube and your IP is not sent to a YouTube server until you consent to it.
        See their privacy policy here: <a href="https://www.youtube.com/static?template=privacy_guidelines" target="_blank" class="privacy-link">YouTube Privacy Policy.</a>
    </p>

    <div class="line"></div>

    <a href="{{route('privacy')}}#your-data" id="your-data"><h4><p style="color: #01a3c1;">3. Who has access to your data</p></h4></a>

    <p>
        If you are not a registered client for our site, there is no personal information we can retain or view regarding yourself.
    </p>
    <p>
        If you are a client with a registered account, your personal information can be accessed by:
    </p>
    <ul>
        <li>Our system administrators.</li>
        <li>Our supporters when they (in order to provide support) need to get the information about the client accounts and access.</li>
    </ul>

    <div class="line"></div>

    <a href="{{route('privacy')}}#third-party" id="third-party"><h4><p style="color: #01a3c1;">4. Third party access to your data</p></h4></a>

    <h5><p>GENERAL</p></h5>
    <p>
        We don’t share your data with third-parties in a way as to reveal any of your personal information like email, name, etc.
        The only exceptions to that rule are for partners we have to share limited data with in order to provide the services you expect from us.
    </p>

    <div class="line"></div>

    <a href="{{route('privacy')}}#data-retaining" id="data-retaining"><h4><p style="color: #01a3c1;">5. How long we retain your data</p></h4></a>

    <h5><p>GENERAL</p></h5>
    <p>
        When you submit a support ticket or a comment, its metadata is retained until (if) you tell us to remove it.
        We use this data so that we can recognize you and approve your comments automatically instead of holding them for moderation.
    </p>
    <p>
        If you register on our website, we also store the personal information you provide in your user profile.
        You can see, edit, or delete your personal information at any time (except changing your username).
        Website administrators can also see and edit that information.
    </p>

    <div class="line"></div>

    <a href="{{route('privacy')}}#security-measures" id="security-measures"><h4><p style="color: #01a3c1;">6. Security measures</p></h4>

    <h5><p>GENERAL</p></h5>
    <p>
        We use the SSL/HTTPS protocol throughout our site. This encrypts our user communications with the servers so that personal
        identifiable information is not captured/hijacked by third parties without authorization.
    </p>
    <p>
        In case of a data breach, system administrators will immediately take all needed steps to ensure system integrity,
        will contact affected users and will attempt to reset passwords if needed.
    </p>

    <div class="line"></div>

        <a href="{{route('privacy')}}#amendments" id="amendments"><h4><p style="color: #01a3c1;">7. Amendments</p></h4></a>

    <h5><p>GENERAL</p></h5>
    <p>
        We may amend this Privacy Policy from time to time. When we amend this Privacy Policy,
        we will update this page accordingly and require you to accept the amendments in
        order to be permitted to continue using our services.
    </p>

    <div class="line"></div>

@endsection
