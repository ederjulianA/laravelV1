@extends('plantilla.main')


@section('content')
	@if(Auth::check())
		<section class="contenido">
		<p> HOLA {{ Auth::user()->username }}. </p>

	</section>
		
				
			
		<!--<a href="https://mega.co.nz/#!8xhWBYDI!lhX6bLwnXa6b6rq_BILzc-y-qGNtVj6scdr2Nhfue0Y"> Front-end p-1</a> <br>
		<a href="https://mega.co.nz/#!hwoyULYb!T9T7ixJAdU_W5Tg4-ba8KWHnGvyf4RQxjNjyHPp326E"> Front-end p-2</a> <br>
		<a href="https://mega.co.nz/#!w85RiABY!ws44h3k9DkzECOLzJ5J05iNxPwRoTHc_3WOm0eu2Png"> Front-end p-3</a> <br>
		<a href="https://mega.co.nz/#!p1BynIyS!2V0DJA8_TUZ6F-yMXolpLq617AA6ktMFcjCdIS1UVYE"> Front-end p-4</a> <br>
		<a href="https://mega.co.nz/#!55ImEBKT!mo3VvnzyrANm-gLbmkYq3u74prjxM4Z9lDOhHAq_b2Q"> Front-end p-5</a> <br>
		<a href="https://mega.co.nz/#!9lIwAQbR!0zc2JVIDr7nZtZ_TxZKFEJQANPUDHQeEWvCqrrQ0Ozs"> Front-end p-6</a> <br>
		<a href="https://mega.co.nz/#!gg4wmDQB!GjLS2Kvbkcblq8u3l9SbciDRbQawjDJQKkwVjYkpQxk"> Front-end p-7</a> <br>
		<a href="https://mega.co.nz/#!0sB1hJAC!mFuMNm5AcVw4oTumq9L3pEit_1m5aClXAVU23gzkULo"> Front-end p-8</a> <br>
		<a href="https://mega.co.nz/#!IsoCTaLT!Ey555JcZpIY1VliBcM9fCcyEobEUsC9OJdPbUy0MReY"> Front-end p-9</a> <br>

		<a href="https://mega.co.nz/#!thAVWayZ!ROUgkhqiLdWTEQFkvZ15IiDPmaTqrFxCVg-l1bMMoOY"> Front-end p-10</a> <br>

		<a href="https://mega.co.nz/#!ApwkAbhY!KvAYdgs0WcmujX7_t4JSv4rq-XM2y1xKO47ALkNa1-o"> Front-end p-11</a> <br>

		<a href="https://mega.co.nz/#!wxRSWSRB!6FcBlSZtlfl5T6gr4FffpPQxeTQzPAFjdGQBKe_qt_0"> Front-end p-12</a> <br>

		<a href="https://mega.co.nz/#!h853BCiD!yKfOYwgsfvGJP7CqsLeuM-uC6LO1y0_rVdJkHr9mkJo"> Front-end p-13</a> <br>

		<a href="https://mega.co.nz/#!p54lkSwA!VW10SnPDOmimGM4fxkN01qi1m2Z8o2HusoD69E82ENw"> Front-end p-14</a> <br>

		<a href="https://mega.co.nz/#!pohliSRQ!1GzyiCspwq0Y8caKANEJ6C3lY120lCUeJo7VXs10sf4"> Front-end p-15</a> <br>
		<a href="https://mega.co.nz/#!g94FQRrZ!VNwspRw-WX7_gWKp2QaSK0w7FWFgjQrAFcDyoE6Au34"> Front-end p-16</a> <br>

		<a href="https://mega.co.nz/#!wkQ2GajC!aqcDrcd6q9cHYgkb_jfiIhTarPYvKbA-NHog53LeHyo"> Front-end p-17</a> <br>

		<a href="https://mega.co.nz/#!gpBlGJ7K!5SHI3Ox92YVNTwYPf84D8j1HRBDVSfXhCtdKWlGZJbM"> Front-end p-18</a> <br>

		<a href="https://mega.co.nz/#!Rk4zlQIJ!lwHDY32awXQHLFUC9oLcFcGl_FxlA6BheLTkJNS-Tcc"> Front-end p-19</a> <br>

		<a href="https://mega.co.nz/#!hoBHwDxb!tUONx2kxrEBjKcXV66Oot5jBhiINWqf-Mzq0HmlO2e4"> Front-end p-20</a> <br>

		<a href="https://mega.co.nz/#!N5Q3wALJ!ESrglZGFQHP4HtxAJY1bkwhdX8MY127h3GKXKEC-s4A"> Front-end p-21</a> <br>

		<a href="https://mega.co.nz/#!4txDHCLZ!ly7yCYLCp6nXWzG01YblKutwtEVpr3qEl2czxoRvK_U"> Front-end p-22</a> <br>

		<a href="https://mega.co.nz/#!Fk5S1aIT!RO2WCiWNUJ_u9Be6PMjY9FfZOQ6jJ9g3puHL8hCr5dA"> Front-end p-23</a> <br>

		<a href="https://mega.co.nz/#!pw4XBIhL!Eby7vb0E4QzGSLtBUg8qZHbb6Fzts1N1I-4k2iHFTck"> Front-end p-24</a> <br>

		<a href="https://mega.co.nz/#!k0w0ABIQ!_AJnmP_ISwqOFjkH_RH4H8voxLmSG3zNb57-ZlFfkF8"> Front-end p-25</a> <br>

		<a href="https://mega.co.nz/#!V5JRXJLB!XVadns0-uIAOtVfV8HnDJsQ_kG1W-EI4YGEyXn-zprY"> Front-end p-26</a> <br>

		<a href="https://mega.co.nz/#!UpwmjCiY!pAgbr6L9kG23rwFSfDWiwQX7Y0e7PHxMhAh6Zm0SMu8"> Front-end p-27</a> <br>-->
			
	@else
		<p>TU no estas autenticado</p>
		



			

	@endif	
@stop