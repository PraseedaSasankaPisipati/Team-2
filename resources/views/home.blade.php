@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}  !!  Please read and accept our Terms and Conditions.</div>

                <div class="panel-body">
				<p><b>Our Commitment To Privacy </b><br> <br>
We respect your privacy and want to assure you that safeguarding information about you is important to us. To better protect your privacy we provide this notice explaining our information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested. <br> <br>

<b>The Information We Collect</b> <br> <br>
This notice applies to all information collected or submitted to Mercy Housing through our website, at any event, through the mail, in-person, or any other form of correspondence we may participate in. You can make a donation, contact us, and register to receive materials through our website, via the mail, or in written form. The types of personal information collected may include: <br> <br>

Name <br>
Address <br>
Email address <br>
Phone number <br>
Credit/Debit Card Information <br> <br>

<b>The Way We Use Information </b><br><br>
We use the information you provide about yourself when making a gift to communicate with you about the work of Mercy Housing. Your personal data is always safe with us and we shall never sell any information you may choose to share with us. Your privacy will always be fully respected and you can easily opt-out of any further communication from us. Call us at (303) 830-3300 or write to us at mercyhousing@mercyhousing.org or at Mercy Housing, 1999 Broadway Suite 1000 Denver, CO 80202.  <br><br>

We never use or share the personally identifiable information which you provide in ways unrelated to the ones described above without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses. <br><br>

If you make a donation, we may list your name in communications unless otherwise requested. In particular, if you make a donation in honor/memory of an individual or organization, and you provide us with the required contact information, we will share your name and address with that honoree (or honoree contact) so that they may thank you, unless you request us not to. We never share individual donor gift information unless it is specifically requested by the donor. To do so, make a note with your gift or contact us at mercyhousing@mercyhousing.org or (303) 830-3300. We may share a total amount of tribute donations to the honoree or honoree contact if requested by that individual/organization AND the number of tribute gifts exceeds 10 gifts. <br><br>

You can register with our website if you would like to receive our e-newsletter as well as updates on our current initiatives, event notifications and other relevant information. We use non-identifying and aggregate information to better design our website and properly display information to you. Our web servers record your Internet Protocol (IP) address and the pages you visit while at our site. We use this information for internal tracking purposes, to enhance your experience on our site, to respond to your requests, and to advise you of information about our work.<br><br>

 

<b>Our Commitment To Data Security</b> <br><br>
To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect. <br>

Our website uses Secure Sockets Layer (SSL) security technology to encrypt information on all web pages where personal information is collected. Our SSL pages are certified by Entrust. Entrust SSL digital certificates are trusted by more than 99 percent of all web browsers in use today.<br><br>

While we take steps to protect your personal information and keep it secure, no data transmission over the Internet can be guaranteed to be totally secure and therefore we cannot ensure or warrant the security of any information you send to us, and therefore you use our site at your own risk.<br><br>

<b>Our Commitment To Children's Privacy </b><br><br>
Protecting the privacy of the very young is especially important. For that reason, we never collect or maintain information at our website from those we actually know are under 13, and no part of our website is structured to attract anyone under 13. <br><br>

<b>How You Can Correct Your Information </b><br><br>
You can correct factual errors in your personally identifiable information by sending us a request that credibly shows error to mercyhousing@mercyhousing.org. To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.<br><br>

<b>Opt-Out</b><br><br>
Mercy Housing also offers an "opt-out" option at any time they wish to cease receiving emails or other information from our organization. If you initially decided to receive information from us, but at a later date wish to remove your information from our database, you can do so by sending an email to mercyhousing@mercyhousing.org or by calling us at (303) 830-3300. You can also opt out anytime by updating your preferences.<br><br>

<b>How To Contact Us</b><br><br>
Should you have other questions or concerns about these privacy policies, please call us at (303) 830-3300 or send us an email at mercyhousing@mercyhousing.org. <br></p>
                    
					<div align="center"><a href="{{ url('/logout') }}"><i class="btn"></i>I Agree</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
