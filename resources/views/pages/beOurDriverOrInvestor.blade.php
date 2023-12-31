@extends('layouts.main')
@section('content')
<link rel='stylesheet'  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">
<style>
    input[type=text] {
        background-color: #FFFFFF;
        border: solid 1px #dee2e6;

    }

    a {
        text-decoration: none;
        color: black;
    }
</style>
<br>
<div class="container margin-width">
	<div class="row  justify-content-center align-items-center" id="locateus">
		<div class="col-lg-6 col-md-12 col-sm-12" style="padding: 60px 40px 90px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            @if (Session::get('error') )
                <div class="alert alert-danger" role="alert">  {{ Session::get('error') }}
                </div>
            @endif
            @if (Session::get('success') )
                <div class="alert alert-success alert-dismissible" role="alert">  {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			<form id="be_driver_or_invester_form" action="{{route('be-our-rls-driver-or-investor.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row" style="margin-bottom: 2%;">
					<h4>Be Our Milele Driver/Investor</h4>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
						<div class="form-group">
							<input type="text" name="name" class="form-control form-control-lg " placeholder="Name *" value="">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
						<div class="form-group">
							<input type="text" name="email" class="form-control form-control-lg " placeholder="Email ( Optional )"
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" value="">
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sx-3 mb-2">
						<div class="form-group">
							<select name="country_code" class="form-control form-control-lg " placeholder="Country Code *" >
								<option value="376">+376</option>
								<option value="971">+971</option>
								<option value="93">+93</option>
								<option value="1-268">+1-268</option>
								<option value="1-264">+1-264</option>
								<option value="355">+355</option>
								<option value="374">+374</option>
								<option value="244">+244</option>
								<option value="672">+672</option>
								<option value="54">+54</option>
								<option value="1-684">+1-684</option>
								<option value="43">+43</option>
								<option value="61">+61</option>
								<option value="297">+297</option>
								<option value="358">+358</option>
								<option value="994">+994</option>
								<option value="387">+387</option>
								<option value="1-246">+1-246</option>
								<option value="880">+880</option>
								<option value="32">+32</option>
								<option value="226">+226</option>
								<option value="359">+359</option>
								<option value="973">+973</option>
								<option value="257">+257</option>
								<option value="229">+229</option>
								<option value="590">+590</option>
								<option value="1-441">+1-441</option>
								<option value="673">+673</option>
								<option value="591">+591</option>
								<option value="55">+55</option>
								<option value="1-242">+1-242</option>
								<option value="975">+975</option>
								<option value="47">+47</option>
								<option value="267">+267</option>
								<option value="375">+375</option>
								<option value="501">+501</option>
								<option value="1">+1</option>
								<option value="61">+61</option>
								<option value="243">+243</option>
								<option value="236">+236</option>
								<option value="242">+242</option>
								<option value="41">+41</option>
								<option value="225">+225</option>
								<option value="682">+682</option>
								<option value="56">+56</option>
								<option value="237">+237</option>
								<option value="86">+86</option>
								<option value="57">+57</option>
								<option value="506">+506</option>
								<option value="53">+53</option>
								<option value="238">+238</option>
								<option value="599">+599</option>
								<option value="61">+61</option>
								<option value="357">+357</option>
								<option value="420">+420</option>
								<option value="49">+49</option>
								<option value="253">+253</option>
								<option value="45">+45</option>
								<option value="1-767">+1-767</option>
								<option value="1-809">+1-809</option>
								<option value="213">+213</option>
								<option value="593">+593</option>
								<option value="372">+372</option>
								<option value="20">+20</option>
								<option value="212">+212</option>
								<option value="291">+291</option>
								<option value="34">+34</option>
								<option value="251">+251</option>
								<option value="358">+358</option>
								<option value="679">+679</option>
								<option value="500">+500</option>
								<option value="691">+691</option>
								<option value="298">+298</option>
								<option value="33">+33</option>
								<option value="241">+241</option>
								<option value="44">+44</option>
								<option value="1-473">+1-473</option>
								<option value="995">+995</option>
								<option value="594">+594</option>
								<option value="44">+44</option>
								<option value="233">+233</option>
								<option value="350">+350</option>
								<option value="299">+299</option>
								<option value="220">+220</option>
								<option value="224">+224</option>
								<option value="590">+590</option>
								<option value="240">+240</option>
								<option value="30">+30</option>
								<option value="500">+500</option>
								<option value="502">+502</option>
								<option value="1-671">+1-671</option>
								<option value="245">+245</option>
								<option value="592">+592</option>
								<option value="852">+852</option>
								<option value="672">+672</option>
								<option value="504">+504</option>
								<option value="385">+385</option>
								<option value="509">+509</option>
								<option value="36">+36</option>
								<option value="62">+62</option>
								<option value="353">+353</option>
								<option value="972">+972</option>
								<option value="44">+44</option>
								<option value="91">+91</option>
								<option value="246">+246</option>
								<option value="964">+964</option>
								<option value="98">+98</option>
								<option value="354">+354</option>
								<option value="39">+39</option>
								<option value="44">+44</option>
								<option value="1-876">+1-876</option>
								<option value="962">+962</option>
								<option value="81">+81</option>
								<option value="254">+254</option>
								<option value="996">+996</option>
								<option value="855">+855</option>
								<option value="686">+686</option>
								<option value="269">+269</option>
								<option value="1-869">+1-869</option>
								<option value="850">+850</option>
								<option value="82">+82</option>
								<option value="965">+965</option>
								<option value="1-345">+1-345</option>
								<option value="7">+7</option>
								<option value="856">+856</option>
								<option value="961">+961</option>
								<option value="1-758">+1-758</option>
								<option value="423">+423</option>
								<option value="94">+94</option>
								<option value="231">+231</option>
								<option value="266">+266</option>
								<option value="370">+370</option>
								<option value="352">+352</option>
								<option value="371">+371</option>
								<option value="218">+218</option>
								<option value="212">+212</option>
								<option value="377">+377</option>
								<option value="373">+373</option>
								<option value="382">+382</option>
								<option value="590">+590</option>
								<option value="261">+261</option>
								<option value="692">+692</option>
								<option value="389">+389</option>
								<option value="223">+223</option>
								<option value="95">+95</option>
								<option value="976">+976</option>
								<option value="853">+853</option>
								<option value="1-670">+1-670</option>
								<option value="596">+596</option>
								<option value="222">+222</option>
								<option value="1-664">+1-664</option>
								<option value="356">+356</option>
								<option value="230">+230</option>
								<option value="960">+960</option>
								<option value="265">+265</option>
								<option value="52">+52</option>
								<option value="60">+60</option>
								<option value="258">+258</option>
								<option value="264">+264</option>
								<option value="687">+687</option>
								<option value="227">+227</option>
								<option value="672">+672</option>
								<option value="234">+234</option>
								<option value="505">+505</option>
								<option value="31">+31</option>
								<option value="47">+47</option>
								<option value="977">+977</option>
								<option value="674">+674</option>
								<option value="683">+683</option>
								<option value="64">+64</option>
								<option value="968">+968</option>
								<option value="507">+507</option>
								<option value="51">+51</option>
								<option value="689">+689</option>
								<option value="675">+675</option>
								<option value="63">+63</option>
								<option value="92">+92</option>
								<option value="48">+48</option>
								<option value="508">+508</option>
								<option value="870">+870</option>
								<option value="1">+1</option>
								<option value="970">+970</option>
								<option value="351">+351</option>
								<option value="680">+680</option>
								<option value="595">+595</option>
								<option value="974">+974</option>
								<option value="262">+262</option>
								<option value="40">+40</option>
								<option value="381">+381</option>
								<option value="7">+7</option>
								<option value="250">+250</option>
								<option value="966">+966</option>
								<option value="677">+677</option>
								<option value="248">+248</option>
								<option value="249">+249</option>
								<option value="46">+46</option>
								<option value="65">+65</option>
								<option value="290">+290</option>
								<option value="386">+386</option>
								<option value="47">+47</option>
								<option value="421">+421</option>
								<option value="232">+232</option>
								<option value="378">+378</option>
								<option value="221">+221</option>
								<option value="252">+252</option>
								<option value="597">+597</option>
								<option value="211">+211</option>
								<option value="239">+239</option>
								<option value="503">+503</option>
								<option value="1-721">+1-721</option>
								<option value="963">+963</option>
								<option value="268">+268</option>
								<option value="1-649">+1-649</option>
								<option value="235">+235</option>
								<option value="262">+262</option>
								<option value="228">+228</option>
								<option value="66">+66</option>
								<option value="992">+992</option>
								<option value="690">+690</option>
								<option value="670">+670</option>
								<option value="993">+993</option>
								<option value="216">+216</option>
								<option value="676">+676</option>
								<option value="90">+90</option>
								<option value="1-868">+1-868</option>
								<option value="688">+688</option>
								<option value="886">+886</option>
								<option value="255">+255</option>
								<option value="380">+380</option>
								<option value="256">+256</option>
								<option value="1">+1</option>
								<option value="598">+598</option>
								<option value="998">+998</option>
								<option value="379">+379</option>
								<option value="1-784">+1-784</option>
								<option value="58">+58</option>
								<option value="1-284">+1-284</option>
								<option value="1-340">+1-340</option>
								<option value="84">+84</option>
								<option value="678">+678</option>
								<option value="681">+681</option>
								<option value="685">+685</option>
								<option value="383">+383</option>
								<option value="967">+967</option>
								<option value="262">+262</option>
								<option value="27">+27</option>
								<option value="260">+260</option>
								<option value="263">+263</option>
							</select>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sx-9 mb-2">
						<div class="form-group">
							<input type="text" name="number" class="form-control form-control-lg" placeholder="Mobile Number *" value="">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
						<label for="vehicle">Select vehicle *</label>
						<div class="form-group">
						<select name="vehicle" class="form-select form-select-lg" placeholder="Vehicle" style=" background-color: #FFFFFF;border: solid 1px #dee2e6;" >
                            <option value="">Select vehicle</option>
                            <option value="LEXUS ES 300" @if(request()->vehicle ) {{request()->vehicle == 'LEXUS' ? 'selected' : ""}}  @endif>LEXUS ES 300</option>
{{--                            <option value="2">VOLKSWAGEN TERAMONT</option>--}}
                            <option value="TESLA MODEL Y" @if(request()->vehicle ) {{request()->vehicle == 'TESLA' ? 'selected' : ""}}  @endif >TESLA MODEL Y </option>
                            <option value="GMC YUKON XL"  @if(request()->vehicle ) {{request()->vehicle == 'GMC' ? 'selected' : ""}}  @endif>GMC YUKON XL</option>
{{--                            <option value="5">MERCEDES V-CLASS</option>--}}
{{--                            <option value="6">CHEVROLET SUBURBAN</option>--}}
{{--                            <option value="7">CADILLAC ESCALADE ESV</option>--}}
{{--                            <option value="8">MERCEDES S-CLASS</option>--}}
{{--                            <option value="9">OTHER TYPE OF VEHICLE</option>--}}
                        </select>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
						<label for="passport_or_visa_copy">Passport (or) Visa copy *</label>
						<div class="form-group">
							<input type="file" name="passport_or_visa_copy" class="form-control form-control-lg @error('passport_or_visa_copy') is-invalid @enderror" >
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
						<label for="driver_license">Driver License </label>
						<div class="form-group">
							<input type="file" name="driver_license" class="form-control form-control-lg" >
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<button id="be_our_driver_or_investor_form_submit" type="submit" class="btn background-color text-white btn-lg" style="width: 100%;">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" ></script>

    <script type="text/javascript">
        jQuery.validator.setDefaults({
            errorClass: "text-danger",
            errorElement: "p",
            errorPlacement: function ( error, element ) {
                error.addClass( "text-danger" );
                error.insertAfter( element );
            }
        });
        jQuery("#be_driver_or_invester_form").validate({
            rules: {
                name: {
                    required: true,
                    maxlength:255
                },
                email: {
                    // required: true,
                    maxlength:255,
                    email:true
                },
                country_code: {
                    required: true,
                    maxlength:6
                },
                number: {
                    required: true,
                    maxlength:20,
                    minlength:5,
                    number:true
                },
                vehicle: {
                    required: true
                },
                passport_or_visa_copy: {
                    required: true,
                    extension: "pdf|png|jpg|jpeg|svg"
                },
                driver_license: {
                    extension: "pdf|png|jpg|jpeg|svg"
                },
            },
            messages: {
                passport_or_visa_copy: {
                    extension: "File type not allowed.Please refer file type here..(eg: pdf,png,jpg,jpeg,svg..)"
                },
                driver_license: {
                    extension: "File type not allowed.Please refer file type here..(eg: pdf,png,jpg,jpeg,svg..)"
                }
            },
        })
    </script>
	 <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function() 
         {
            var element = document.getElementById("partner");
            element.classList.add("active-menu-color");
         });
      </script>
@endsection
