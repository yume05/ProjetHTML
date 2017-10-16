<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFC 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<body>

         <header>
            <p>
         	Network Working Group                                        D. Waitzman<br>
         	Request for Comments: <a>1149</a>                                     BBN STC<br>
                                                                     1 April 1990<br>
          	<h2>A Standard for the Transmission of IP Datagrams on Avian Carriers</h2>
            </p>
            <hr>
         </header>
         <article>
         <section>
            <h3>Status of this Memo</h3>
            <p>This memo describes an experimental method for the encapsulation of
         IP datagrams in avian carriers. This specification is primarily useful in 
         Metropolitan Area Networks.  This is an experimental, not recommended standard.  
         Distribution of this memo is unlimited.</p>
                     

         </section>
         <section>
         	<h3>Overview and Rational</h3>
         	<p>Avian carriers can provide high delay, low throughput, and low
            altitude service.  The connection topology is limited to a single
            point-to-point path for each carrier, used with standard carriers,
            but many carriers can be used without significant interference with
            each other, outside of early spring.  This is because of the 3D ether
            space available to the carriers, in contrast to the 1D ether used by
            IEEE802.3.  The carriers have an intrinsic collision avoidance
            system, which increases availability.  Unlike some network
            technologies, such as packet radio, communication is not limited to
            line-of-sight distance.  Connection oriented service is available in
            some cities, usually based upon a central hub topology.
         	</p>

         </section>
         <section>
            
         	<h3>Frame Format</h3>
         	<p>The IP datagram is printed, on a small scroll of paper, in
            hexadecimal, with each octet separated by whitestuff and blackstuff.
            The scroll of paper is wrapped around one leg of the avian carrier.
            A band of duct tape is used to secure the datagram's edges.  The
            bandwidth is limited to the leg length.  The MTU is variable, and
            paradoxically, generally increases with increased carrier age.  A
            typical MTU is 256 milligrams.  Some datagram padding may be needed.<br>
            Upon receipt, the duct tape is removed and the paper copy of the
            datagram is optically scanned into a electronically transmittable
            form.</p>
                  
         </section>
         <section>

            	<h3>Discussion</h3>
            	<p>Multiple types of service can be provided with a prioritized pecking
               order.  An additional property is built-in worm detection and
               eradication.  Because IP only guarantees best effort delivery, loss
               of a carrier can be tolerated.  With time, the carriers are self-regenerating.  
               While broadcasting is not specified, storms can cause
               data loss.  There is persistent delivery retry, until the carrier
               drops.  Audit trails are automatically generated, and can often be
               found on logs and cable trays.</p> 
         </section>
         <section>

         	<h3>Security Considerations</h3>
            <p>Security is not generally a problem in normal operation, but special
            measures must be taken (such as data encryption) when avian carriers
            are used in a tactical environment.</p>
                  
         </section>
         </article>

         <hr>
         <footer>

         	<h3>Author's Address</h3>

            <p><address>David Waitzman
            BBN Systems and Technologies Corporation
            BBN Labs Division
            10 Moulton Street
            Cambridge, MA 02238<br><br>
            Phone: (617) 873-4323<br><br>
            EMail: dwaitzman@BBN.COM</address></p>
                  
         </footer>
         </div>
</body>

</html>


