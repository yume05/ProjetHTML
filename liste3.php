<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFC 6214 - IP Datagrams on Avian Carriers</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
<body>
<header>
<!-- Header -->
<p>Independent Submission                                      B. Carpenter</p>
<p>Request for Comments: 6214                             Univ. of Auckland</p>
<p>Category: Informational                                        R. Hinden</p>
<p>ISSN: 2070-1721                                     Check Point Software</p>

</header>
<h2> Adaptation of <a href="#">RFC 1149</a> for IPv6</h2>
<article>
<section>
   <h3>Abstract</h3>
	<p>
   This document specifies a method for transmission of IPv6 datagrams
   over the same medium as specified for IPv4 datagrams in <a href="#">RFC 1149</a>.
   </p>
   </section>
   <section>
   	<h3>Status of This Memo</h3>
   	<p>
      This document is not an Internet Standards Track specification; it is
      published for informational purposes.
      This is a contribution to the RFC Series, independently of any other
      RFC stream.  The RFC Editor has chosen to publish this document at
      its discretion and makes no statement about its value for
      implementation or deployment.  Documents approved for publication by
      the RFC Editor are not a candidate for any level of Internet
      Standard; see <a href="#">Section 2 of RFC 5741.</a>
      Information about the current status of this document, any errata,
      and how to provide feedback on it may be obtained at
      <a href="#">http://www.rfc-editor.org/info/rfc6214.</a></p>
   </section>
   <section>
   	<h3>Copyright Notice</h3>
   	<p>
      Copyright (c) 2011 IETF Trust and the persons identified as the
      document authors.  All rights reserved.
      This document is subject to <a href="#">BCP 78</a> and the IETF Trust's Legal
      Provisions Relating to IETF Documents
      (<a href="#">http://trustee.ietf.org/license-info</a>) in effect on the date of
      publication of this document.  Please review these documents
      carefully, as they describe your rights and restrictions with respect
      to this document.</p>
   </section>
   <section>
      <h3>Table of contents</h3>
         <p>
            <ul>
               <li><a href="#1">1.</a>  Introduction  . . . . . . . . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#2">2.</a>  Normative Notation  . . . . . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#3">3.</a>  Detailed Specification  . . . . . . . . . . . . . . . . . . . . 
                  <ul>
                     <li><a href="#3.1">3.1.</a>  Maximum Transmission Unit . . . . . . . . . . . . . . . . . </li>
                     <li><a href="#3.2">3.2.</a>  Frame Format  . . . . . . . . . . . . . . . . . . . . . . . </li>
                     <li><a href="#3.3">3.3.</a>  abbress Configuration . . . . . . . . . . . . . . . . . . . </li>
                     <li><a href="#3.4">3.4.</a>  Multicast . . . . . . . . . . . . . . . . . . . . . . . . . </li>
                  </ul>
               </li>
               <li><a href="#4">4.</a> Quality-of-Service Considerations . . . . . . . . . . . . . . . </li>
               <li><a href="#5">5.</a>  Routing and Tunneling Considerations  . . . . . . . . . . . . . </li>
               <li><a href="#6">6.</a>  Multihoming Considerations  . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#7">7.</a>  Internationalization Considerations . . . . . . . . . . . . . . </li>
               <li><a href="#8">8.</a>  Security Considerations . . . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#9">9.</a>  IANA Considerations . . . . . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#10">10.</a> Acknowledgements  . . . . . . . . . . . . . . . . . . . . . . . </li>
               <li><a href="#11">11.</a> References  . . . . . . . . . . . . . . . . . . . . . . . . . . 
                  <ul>
                       <li><a href="#11.1">11.1.</a>. Normative References  . . . . . . . . . . . . . . . . . . .</li> 
                       <li><a href="#11.2">11.2.</a> Informative References  . . . . . . . . . . . . . . . . . . </li>
                  </ul>
               </li>
         </ul>
      </p>
   </section>
   <section>
      <h3 id="1"><b>1.  Introduction</b></h3>
      <p>
      As shown by [<abbr title="Emerging Service Provider Scenarios for IPv6 Deployment">RFC6036</abbr>], many service providers are actively planning
      to deploy IPv6 to alleviate the imminent shortage of IPv4 abbresses.
      This will affect all service providers who have implemented
      [<a href="#"><abbr title="Standard for the transmission of IP datagrams on avian carriers">RFC1149</abbr></a>].  It is therefore necessary, indeed urgent, to specify a
      method of transmitting IPv6 datagrams [<a href="#"><abbr title="Internet Protocol, Version 6 (Pv6) Specification">RFC2460</abbr></a>] over the <a href="#">RFC 1149</a>
      medium, rather than obliging those service providers to migrate to a
      different medium.  This document offers such a specification.
      </p>
   </section>
   <section>
      <h3 id="2"><b>2.  Normative Notation</b></h3>
      <p>
         The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this
      document are to be interpreted as described in [<a href="#"><abbr title="Key words for user in RFCs to Indicate Requirement Levels">RFC2119</abbr></a>].
      </p>
   </section>
   <section>
      <h3 id="3"><b>3.  Detailed Specification</b></h3>
      <p>
         Unless otherwise stated, the provisions of [<a href="#"><abbr title="Standard for the transmission of IP datagrams on avian carriers">RFC1149</abbr></a>] and [<a href="#"><abbr title="Internet Protocol, Version 6 (IPv6) Specification">RFC2460</abbr></a>]
      apply throughout.
      </p>
   </section>
   <section>
      <h3 id="3.1"><b>3.1.  Maximum Transmission Unit</b></h3>
      <p>
      As noted in <a href="#">RFC 1149</a>, the MTU is variable, and generally increases
      with increased carrier age.  Since the minimum link MTU allowed by
      <a href="#">RFC 2460</a> is 1280 octets, this means that older carriers MUST be used
      for IPv6.  <a href="#">RFC 1149</a> does not provide exact conversion factors between age and milligrams, or between milligrams and octets.  These conversion factors are implementation dependent, but as an
      illustrative example, we assume that the 256 milligram MTU suggested
      in <a href="#">RFC 1149</a> corresponds to an MTU of 576 octets.  In that case, the typical MTU for the present specification will be at least
      256*1280/576, which is approximately 569 milligrams.  Again as an
      illustrative example, this is likely to require a carrier age of at
      least 365 days.</p>
      <p>
      Furthermore, the MTU issues are non-linear with carrier age.  That
      is, a young carrier can only carry small payloads, an adult carrier
      can carry jumbograms [<a href="#"><abbr title="IPv6 Jumbograms">RFC2675</abbr></a>], and an elderly carrier can again carry only smaller payloads.  There is also an effect on transit time
      depending on carrier age, affecting bandwidth-delay product and hence
      the performance of TCP.
      </p>
   </section>
   <section>
      <h3 id="3.2"><b>3.2.  Frame Format</b></h3>
      <p>
      <a href="#">RFC 1149</a> does not specify the use of any link layer tag such as an
      Ethertype or, worse, an OSI Link Layer or SNAP header [<a href="#"><abbr title="Standard for the transmission of IP datagrams over IEEE 802 networks"></abbr></a>].</p>
      <p>
      Indeed, header snaps are known to worsen the quality of service
      provided by <a href="#">RFC 1149</a> carriers.  In the interests of efficiency and to avoid excessive energy consumption while packets are in flight through the network, no such link layer tag is required for IPv6
      packets either.  The frame format is therefore a pure IPv6 packet as
      defined in [<a href="#"><abbr title="Internet Protocol, Version 6 (IPv6) Specification">RFC2460</abbr></a>], encoded and decoded as defined in [<a href="#"><abbr title="Standard for the transmission of IP datagrams on avian carriers">RFC1149</abbr></a>].
      </p>
      <p>
      One important consequence of this is that in a dual-stack deployment
      [<a href="#"><abbr title="Basic Transition Mechanisms for IPv6 Hosts and Routers">RFC4213</abbr></a>], the receiver MUST inspect the IP protocol version number
      in the first four bits of every packet, as the only means to
      demultiplex a mixture of IPv4 and IPv6 packets.
      </p>
   </section>
   <section>
      <h3 id="3.3"><b>3.3.  abbress Configuration</b></h3>
      <p>
      The lack of any form of link layer protocol means that link-local
      abbresses cannot be formed, as there is no way to abbress anything
      except the other end of the link.</p>
      <p>
      Similarly, there is no method to map an IPv6 unicast abbress to a
      link layer abbress, since there is no link layer abbress in the first
      place.  IPv6 Neighbor Discovery [<a href="#"><abbr title="Neighbor Discovery for IP version 6 (IPv6)">RFC4861</abbr></a>] is therefore impossible.
      </p><p>
      Implementations SHOULD NOT even try to use stateless abbress auto-
      configuration [<a href="#"><abbr title="IPv6 Stateless abbress Autoconfiguration">RFC4862</abbr></a>].  This recommendation is because this
      mechanism requires a stable interface identifier formed in a way
      compatible with [<a href="#"><abbr title="IP Version 6 abbressing Architecture">RFC4291</abbr></a>].  Unfortunately the transmission elements specified by <a href="#">RFC 1149</a> are not generally stable enough for this and
      may become highly unstable in the presence of a cross-wind.
      </p><p>
      In most deployments, either the end points of the link remain
      unnumbered, or a /127 prefix and static abbresses MAY be assigned.
      See [<a href="#"><abbr title="Using 127-bits IPv6 Prefixes on Inter-Router Links">IPv6-PREFIXLEN</abbr></a>] for further discussion.
      </p>
   </section>
   <section>
      <h3 id="3.4"><b>3.4.  Multicast</b></h3>
      <p>
          <a href="#">RFC 1149</a> does not specify a multicast abbress mapping.  It has been
      reported that attempts to implement IPv4 multicast delivery have
      resulted in excessive noise in transmission elements, with subsequent
      drops of packet digests.  At the present time, an IPv6 multicast
      mapping has not been specified, to avoid such problems.
      </p>
   </section>
   <section>
      <h3 id="4"><b>4.  Quality-of-Service Considerations</b></h3>
      <p>
      [RFC2549] is also applicable in the IPv6 case.  However, the author
      of <a href="#">RFC 2549</a> did not take account of the availability of the
      Differentiated Services model [<a href="#"><abbr title="Definition of the Differentiated Services Field (DS Field) in the IPv4 and IPv6 Headers">RFC2474</abbr></a>].  IPv6 packets carrying a non-default Differentiated Services Code Point (DSCP) value in their
      Traffic Class field [<a href="#"><abbr title="Internet Protocol, Version 6 (IPv6) Specification">RFC2460</abbr></a>] MUST be specially encoded using green
      or blue ink such that the DSCP is externally visible.  Note that red
      ink MUST NOT be used to avoid confusion with the usage of red paint
      specified in <a href="#">RFC 2549</a>.
      </p><p>
      <a href="#">RFC 2549</a> did not consider the impact on quality of service of
      different types of carriers.  There is a broad range.  Some are very
      fast but can only carry small payloads and transit short distances,
      others are slower but carry large payloads and transit very large
      distances.  It may be appropriate to select the individual carrier
      for a packet on the basis of its DSCP value.  Indeed, different
      carriers will implement different per-hop behaviors according to <a href="#">RFC2474</a>.
      </p>
   </section>
   <section>
      <h3 id="5"><b>5.  Routing and Tunneling Considerations</b></h3>
      <p>
      Routing carriers through the territory of similar carriers, without
      peering agreements, will sometimes cause abrupt route changes,
      looping packets, and out-of-order delivery.  Similarly, routing
      carriers through the territory of predatory carriers may potentially
      cause severe packet loss.  It is strongly recommended that these
      factors be considered in the routing algorithm used to create carrier
      routing tables.  Implementers should consider policy-based routing to
      ensure reliable packet delivery by routing around areas where
      territorial and predatory carriers are prevalent.
      </p><p>
      There is evidence that some carriers have a propensity to eat other
      carriers and then carry the eaten payloads.  Perhaps this provides a
      new way to tunnel an IPv4 packet in an IPv6 payload, or vice versa.
      However, the decapsulation mechanism is unclear at the time of this
      writing.
      </p>
   </section>
   <section>
      <h3 id="6"><b>6.  Multihoming Considerations</b></h3>
      <p>
      Some types of carriers are notoriously good at homing.  Surprisingly,
      this property is not mentioned in <a href="#">RFC 1149</a>.  Unfortunately, they
      prove to have no talent for multihoming, and in fact enter a routing
      loop whenever multihoming is attempted.  This appears to be a
      fundamental restriction on the topologies in which both <a href="#">RFC 1149</a> and
      the present specification can be deployed.</p>
   </section>
   <section>
      <h3 id="7"><b>7.  Internationalization Considerations</b></h3>
      <p>
         In some locations, such as New Zealand, a significant proportion of
      carriers are only able to execute short hops, and only at times when
      the background level of photon emission is extremely low.  This will
      impact the availability and throughput of the solution in such
      locations.
      </p>
   </section>
   <section>
      <h3 id="8"><b>8.  Security Considerations</b></h3>
      <p>
      The security considerations of [<a href="#">RFC1149</a>] apply. In addition, recent experience suggests that the transmission elements are exposed to many different forms of denial-of-service attacks, especially when perching.  Also, the absence of link layer identifiers referred to
      above, combined with the lack of checksums in the IPv6 header,
      basically means that any transmission element could be mistaken for
      any other, with no means of detecting the substitution at the network
      layer.  The use of an upper-layer security mechanism of some kind
      seems like a really good idea.
      </p><p>
      There is a known risk of infection by the so-called H5N1 virus.
      Appropriate detection and quarantine measures MUST be available.
      </p>
   </section>
   <section>
      <h3 id="9"><b>9.  IANA Considerations</b></h3>
      <p>
      This document requests no action by IANA.  However, registry clean-up
      may be necessary after interoperability testing, especially if
      multicast has been attempted.
      </p>
   </section>
   <section>
      <h3 id="10"><b>10.  Acknowledgements</b></h3>
      <p>
         Steve Deering was kind enough to review this document for conformance
      with IPv6 requirements.  We acknowledge in advance the many errata in
      this document that will be reported by Alfred Hoenes.
      </p><p>
      This document was produced using the xml2rfc tool [<a href="#">RFC2629</a>].
      </p>
   </section>
   <section>
      <h3 id="11"><b>11.  References</b></h3>
      <h4 id="11.1"><b>11.1.  Normative References</b></h4>
      
      
      <p>[RFC1149]      Waitzman, D., "Standard for the transmission of IP datagrams on avian carriers", <a href="#">RFC 1149,</a> April 1990.</p>
                        
      <p>[RFC2119]      Bradner, S., "Key words for use in RFCs to Indicate Requirement Levels", <a href="#">BCP 14</a>, <a href="#">RFC 2119</a>, March 1997.</p>
                        
      <p>[RFC2460]      Deering, S. and R. Hinden, "Internet Protocol, Version 6 (IPv6) Specification", <a href="#">RFC 2460</a>, December 1998.</p>
                        
      <p>[RFC2474]      Nichols, K., Blake, S., Baker, F., and D. Black, "Definition of the Differentiated Services Field (DS Field) in the IPv4 and IPv6 Headers", <a href="#">RFC 2474,</a> December 1998.</p>
                        
      <p>[RFC2675]      Borman, D., Deering, S., and R. Hinden, "IPv6 Jumbograms", <a href="#">RFC 2675</a>, August 1999.</p>
                        
      <p>[RFC4213]      Nordmark, E. and R. Gilligan, "Basic Transition Mechanisms for IPv6 Hosts and Routers", <a href="#">RFC 4213</a>, October 2005.

         </p>
      
      <h4 id="11.2"><b>11.2.  Informative References</b></h4>
      
         <p>[IPv6-PREFIXLEN]  Kohno, M., Nitzan, B., Bush, R., Matsuzaki, Y.,
                              Colitti, L., and T. Narten, "Using 127-bit IPv6
                              Prefixes on Inter-Router Links", Work in Progress,
                              October 2010.</p>
                        
            <p>[RFC1042]       Postel, J. and J. Reynolds, "Standard for the
                              transmission of IP datagrams over IEEE 802
                              networks", STD 43, <a href="#">RFC 1042</a>, February 1988.</p>
                              
            <p>[RFC2549]         Waitzman, D., "IP over Avian Carriers with Quality
                              of Service", <a href="#">RFC 2549</a>, April 1999.</p>
                              
            <p>[RFC2629]         Rose, M., "Writing I-Ds and RFCs using XML",
                              RFC 2629, June 1999.</p>
                              
           <p> [RFC4291]         Hinden, R. and S. Deering, "IP Version 6 Addressing
                              Architecture", <a href="#">RFC 4291</a>, February 2006.</p>
                              
            <p>[RFC4861]         Narten, T., Nordmark, E., Simpson, W., and H.
                              Soliman, "Neighbor Discovery for IP version 6
                              (IPv6)", <a href="#">RFC 4861</a>, September 2007.</p>
                              
            <p>[RFC4862]         Thomson, S., Narten, T., and T. Jinmei, "IPv6
                              Stateless Address Autoconfiguration", <a href="#">RFC 4862</a>,
                              September 2007.</p>
                              
            <p>[RFC6036]         Carpenter, B. and S. Jiang, "Emerging Service
                              Provider Scenarios for IPv6 Deployment", <a href="#">RFC 6036</a>,
                              October 2010.
         </p>
      
   </section>
</article>

<footer>
	<h3>Authors' Addresses</h3>

   <address><p>Brian Carpenter
   Department of Computer Sciencebr
   University of Auckland
   PB 92019
   Auckland,   1142
   New Zealand</p>

   <p>EMail: brian.e.carpenter@gmail.com</p>


   <p>Robert M. Hinden
   Check Point Software Technologies, Inc.
   800 Bridge Parkway
   Redwood City, CA  94065
   US</p>

   <p>Phone: +1.650.387.6118
   EMail: bob.hinden@gmail.com</p></address>
</footer>
</body>
</html>