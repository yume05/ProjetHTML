<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFC 2549 - IP Datagrams on Avian Carriers</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">  
    </head>
<body>
<header>
<!-- Header -->
	
	<p>Network Working Group                                    D. Waitzman<br>
Request for Comments: 2549                       IronBridge Networks<br>
Updates: <a>1149</a>                                         1 April 1999<br>
Category: Experimental</p>
 	<h2> IP over Avian Carriers with Quality of Service</h2>
</header>
<article>
<section>
	<h3>Status of this Memo</h3>
	<p>This memo defines an Experimental Protocol for the Internet
   community.  It does not specify an Internet standard of any kind.
   Discussion and suggestions for improvement are requested.
   Distribution of this memo is unlimited.</p>
</section>
<section>
	<h3>Copyright Notice</h3>
	<p>
  Copyright (C) The Internet Society (1999).  All Rights Reserved.
	</p>
</section>
<section>
	<h3>Abstract</h3>
	<p>This memo amends <a href="#">RFC 1149</a>, "A Standard for the Transmission of IP
   Datagrams on Avian Carriers", with Quality of Service information.
   This is an experimental, not recommended standard.</p>
</section>
<section>
	<h3>Overview and Rational</h3>
  	<p>The following quality of service levels are available: Concorde,
     First, Business, and Coach.  Concorde class offers expedited data
     delivery.  One major benefit to using Avian Carriers is that this is
     the only networking technology that earns frequent flyer miles, plus
     the Concorde and First classes of service earn 50% bonus miles per
     packet.  Ostriches are an alternate carrier that have much greater
     bulk transfer capability but provide slower delivery, and require the
     use of bridges between domains.
     <br><br>
     The service level is indicated on a per-carrier basis by bar-code
     markings on the wing.  One implementation strategy is for a bar-code
     reader to scan each carrier as it enters the router and then enqueue
     it in the proper queue, gated to prevent exit until the proper time.
     The carriers may sleep while enqueued.
     <br><br>
     For secure networks, carriers may have classes Prime or Choice.
     Prime carriers are self-keying when using public key encryption.
     Some distributors have been known to falsely classify Choice carriers
     as Prime.
     <br><br>
     Packets MAY be marked for deletion using RED paint while enqueued.<br>
      Weighted fair queueing (WFQ) MAY be implemented using scales, as
     shown:
     <br><br>

               <pre>                               __
                                    _____/-----\   / o\
                                   <____   _____\_/    >--
                   +-----+              \ /    /______/
                   | 10g |               /|:||/
                   +-----+              /____/|
                   | 10g |                    |
                   +-----+          ..        <a href="#">X</a>
                 ===============================
                                ^
                                |
                            =========</pre>
    <br><br>
     Carriers in the queue too long may leave log entries, as shown on the
     scale.
     <br><br>
     The following is a plot of traffic shaping, from coop-erative host
     sites.
     <br><br>

         <pre> Alt |       Plot of Traffic Shaping showing carriers in flight
              |
           2k |           ....................
              |          .                    .
              |         .                      .
           1k |        .                        .
              |   +---+                          +---+
              |   | A |                          | B |
              |   +---+                          +---+
              |_____________________________________________</pre>

    <br><br>
    Avian carriers normally bypass bridges and tunnels but will seek out
     worm hole tunnels.  When carrying web traffic, the carriers may
     digest the spiders, leaving behind a more compact representation.
     The carriers may be confused by mirrors.
    <br><br>
    Round-robin queueing is not recommended.  Robins make for well-tuned
     networks but do not support the necessary auto-homing feature<br>A BOF was held at the last IETF but only Avian Carriers were allowed
     entry, so we don't know the results other than we're sure they think
     MPLS is great.  Our attempts at attaching labels to the carriers have
     been met with resistance.
     <br><br>
     NATs are not recommended either -- as with many protocols, modifying
     the brain-embedded IP addresses is difficult, plus Avian Carriers MAY
     eat the NATs.
     <br><br>
     Encapsulation may be done with saran wrappers.  Unintentional
     encapsulation in hawks has been known to occur, with decapsulation
     being messy and the packets mangled.
     <br><br>
     Loose source routes are a viable evolutionary alternative enhanced
     standards-based MSWindows-compliant technology, but strict source
     routes MUST NOT be used, as they are a choke-point.
     <br><br>
     The ITU has offered the IETF formal alignment with its corresponding
     technology, Penguins, but that won't fly.
     <br><br>
     Multicasting is supported, but requires the implementation of a clone
     device.  Carriers may be lost if they are based on a tree as it is
     being pruned.  The carriers propagate via an inheritance tree.  The
     carriers have an average TTL of 15 years, so their use in expanding
     ring searches is limited.
     <br><br>
     Additional quality of service discussion can be found in a Michelin's
     guide.</p>
    
</section>
<section>
	<h3>MIB and Management issues</h3>
   
    <p> AvCarrier2 OBJECT-TYPE<br>
     SYNTAX     SEQUENCE OF DNA<br>
     MAX-ACCESS can't-read<br>
     STATUS     living<br>
     DESCRIPTION "Definition of an avian carrier"
     ::= { life eukaryotes mitochondrial_eukaryotes crown_eukaryotes
           metazoa chordata craniata vertebrata gnathostomata
           sarcopterygii terrestrial_vertebrates amniota diapsida
           archosauromorpha archosauria dinosauria aves neornithes
           columbiformes columbidae columba livia }<br><br>

   AvCarrier OBJECT-TYPE<br>
     SYNTAX     SET OF Cells<br>
     MAX-ACCESS not-accessible<br>
     STATUS     obsolete<br>
     DESCRIPTION "Definition of an avian carrier"
     ::= { life animalia chordata vertebrata aves
           columbiformes columbidae columba livia }
<br><br>
   PulseRate OBJECT-TYPE<br>
     SYNTAX     Gauge(0..300)<br>
     MAX-ACCESS read-only<br>
     STATUS     current<br>
     DESCRIPTION "Pulse rate of carrier, as measured in neck.
                  Frequent sampling is disruptive to operations."
     ::= { AvCarrier 1}<br>

   The carriers will not line up in lexigraphic order but will
   naturally order in a large V shape.  Bulk retrieval is possible
   using the Powerful Get-Net operator.</p>
</section>
<section>
<h3>Specification of Requirements</h3>
<p>
In this document, several words are used to signify the requirements
   of the specification.  These words are often capitalized.<br>

   MUST      Usually.<br>

   MUST NOT  Usually not.<br>

   SHOULD    Only when Marketing insists.<br>

   MAY       Only if it doesn't cost extra.<br>
</p>
</section>
<section>
<h3>Security Considerations</h3>
  
    <p>
   There are privacy issues with stool pigeons.<br>

   Agoraphobic carriers are very insecure in operation.
    </p>
  
</section>
<section>
  <h3>Patent Considerations</h3>
  
      <p>
       There is ongoing litigation about which is the prior art: carrier or
       egg.
      </p>
  
</section>
<section>
<h3>References</h3>
  <p>
  Waitzman, D., "A Standard for the Transmission of IP Datagrams on
     Avian Carriers", <a href="#">RFC 1149</a>, 1 April 1990.
  </p>
</section>
<section>
<h3>ACKnowledgments</h3>
  <blckquote>
  <p>
  Jim.Carlson.Ibnets.com > Jon.Saperia . ack 32 win 123 (DF)
     Ross Callon, Scott Bradner, Charlie Lynn ...
  </p>
  </blckquote>
</section>
</article>


<footer>
	<h3>Author's Address</h3>

   <p><address> David Waitzman<br>
   IronBridge Networks<br>
   55 Hayden Ave<br>
   Lexington, MA 02421<br>
   Phone: (781) 372-8161<br><br>

   EMail: djw@vineyard.net</address></p>
</footer>
</body>

</html>


