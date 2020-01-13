@include('elements.header')

<section id="home" class="main fixed-bg inhome passpg">
    <div class="col-md-12" style="display: inline-block;">

        <div class="col-md-offset-1 col-md-4 tcbg1">
            <div class="tttxt">Talent Tantra 2020</div>
             <img src="{{ URL::asset('images/webp/safarnama.webp')}}" alt="" class="ppimg"/>
            <div class="pptxt">One Day Single Pass</div>
            <div class="tckbut">
                <a href="{{Route('tt.ticket').'/single'}}" alt="">
              <ul>
                <li>
                  BUY NOW
                  <span></span><span></span><span></span><span></span>
                </li>
              </ul>
          </a>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-4 tcbg2">
            <div class="tttxt">Talent Tantra 2020</div>
             <img src="{{ URL::asset('images/webp/safarnama.webp') }}" alt="" class="ppimg"/>
            <div class="pptxt">Three Day Combo Pass</div>
            <div class="tckbut">
                <a href="{{Route('tt.ticket').'/combo '}}" alt="">
              <ul>
                <li>
                  BUY NOW
                  <span></span><span></span><span></span><span></span>
                </li>
              </ul>
          </a>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
        <div class="col-md-12" style="text-align: left;">

            <p>Terms and Conditions</p>
            <ul style="list-style: square; margin-left: 50px;">
                <li>Entry into the campus is from <strong>9 a.m.</strong> onwards.</li>
                <li>Entry without passes will not be permitted. Please carry your pass to the venue. The same should be produced upon request at the gate.</li>
                <li>Organizers reserve the right to perform <strong>security checks</strong> in the members/invitees at the entry point.</li>
                <li>Parking area is available outside the University premises, and is at the risk of the vehicle owner. Organizers will not hold responsibility for any damage or theft of the vehicles.</li>
                <li>Consumption or sale of <strong>alcohol</strong>,<strong> tobacco</strong> or <strong>being intoxicated/under the influence of narcotics</strong> is strictly prohibited on campus. This is a<strong> smoke-free zone</strong> and the organisers reserve the right to <strong>expel violators</strong> from the campus.</li>
                <li>A pass shall not be valid if the <strong>barcode/serial number</strong> has been tampered with. <strong>Unlawful resale of ticket</strong> would lead to seizure or cancellation of that pass without refund or compensation.</li>
                <li><strong>Duplicate tickets</strong> will not be issued for lost or stolen tickets. No refund for a purchased ticket is possible.</li>
                <li>In case of cancellation of the shows due to any unforseen circumstances beyond the control of the organizers, the extent of the refurnd will be based on the situation at hand and the management's decision will be final and binding will be final and binding on all.</li>
            </ul>
    </div>

</section>
@include('elements.footerwidget')
@include('elements.footer')
