
	<div class="row">
		<div class="logo">
			<p class="opensans">Dashboard</p>			
		</div>		
		<div class="sidebar-item {{ $title =='dashboard' ? 'selected':'' }}">
			<a href="{{ route('admin.get.home') }}">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABDUlEQVRIS+2V4W0CMQyF39uADVihI8AG3QCYoOoG3QCYoIzQDWCEjtBu0A0eelWCklxSAiekSuA/pzvZ73Nsn0Pc2NirL2kC4CX4b0n+9MR2AYL4HsBTEP0EMO+BnAVIsuh7Ih4TN2RF0s+m/QkI4s7c5amZy+STNCFNgKTnkHlLPAIN8Uk+ahlUAZKWQbynj9HHkF0ZMABI2iTTcgnAvhuSr2lQBpDkDBaXqhb+O5Kr+O0XUBnDkQycxpg3EE/HeG7AF4Dp2JQb8d+1JmsMjGSmeT8Az3a5Dryj1oMf65oSlXWNopIG/bqqBw9A1qeeuv77HrwBmGUrl8zekxMcijE9kHT8yc7eyWPWhmOPABWHA3B4GUgAAAAASUVORK5CYII="/></span>
				<span class="label">Overview</span>
			</a>
		</div>	
		<div class="sidebar-item {{ $title =='product' ? 'selected':'' }}">
			<a href="{{ route('admin.product.get.home') }}">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABYklEQVRIS+2V3VUCMRCF761ASpAOpAKhAulAqUCoQKjA7UBKkAqECrAD7cC1guu5S+KJIVl49IF92uxM5pv/JZJH0hTAM4ABgDXJRRRLWgO4D2fLZomsCbIWwILka5QxUboG8JECg3Ij6QHASyabkVxLmgenUvGQ5Kc/pICSkQ3JqaQlgKcMsCK5lLQFcFuC54AbAPuKkZKXToWjK8FHJN//AHzIwt0BmJJsJbkmzmv0tE/WgY9qkBV7YMNZNL1HO1G6w0qRJiS3kuzJ4wlQ426TNAbwlugeOkqSX64yIxMAzuHXmVEMAbgLU4CvtgaoYMQAP/mFGq+qfwHElP3PFLm78smuFXkUFuRRU7jIpV0S56DUwjnkm+SgMAfW2xngNeB9kg5UBLi3PWx3Fdc3AObenAXAyne7bVoQ/u77yjKLvG6jBhvp/8KfOidrgEN45PgcQF+aL4C+v9qlBl2nnkzRD8P6KSNc5ljgAAAAAElFTkSuQmCC"/></span>
				<span class="label">Product</span>
			</a>
		</div>	
		<div class="sidebar-item {{ $title =='wishlist' ? 'selected':'' }}">
			<a href="{{ route('admin.get.home') }}">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA00lEQVRIS+2WYQ3CMBCF33OAE3AAEpCAA3AAOAAJOAAFMAfgBAdHLmFJ12zraxlZSLhfS3ft13vv0pYIwswOANbhWMH3keSmnscIcAMwL1g0nFKRXIwOuABwudrimqhQqqChYySjDQHwNdyPOCYAZkMBqkyz6+b4TKIuaNDiEuDcY3IXYwfA21MCZKrTSJcADwBeRU4sAUzVCvYkvWQ5zMzztyrgWeCBnz/expJE8s5bEiXAieQqRTGz+1v37MPu64DU5vv+SxL9AePfaL/rweDPlhfHiJsZs4S1SAAAAABJRU5ErkJggg=="/></span>
				<span class="label">Order</span>
			</a>
		</div>
		<div class="sidebar-item {{ $title =='category' ? 'selected':'' }}">
			<a href="{{ route('admin.category.get.home') }}">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABnklEQVRIS92W4VECMRCF36tArADsQCsQKlAqUDrQCpQKlAqECpQKhAqkA7ECsYLnvJuNZk7gMiPMOOZfkr182d232SPWDEn3AC4ADEg+rbNJa5LOATwAmJC8qttyA0CxPiR52wDw/o1tSP44r1qQdAzgDMAbybGkLwCAcXizjjMBcJkDJHneBjAluWAs2EWPOcluDTAD8LzBix6Abg1g+9OwHxiwDGIOSLfuA1g1AFoAHgGMnANJOWBpQHG8t+Ui35P0nZf/C5DUIun4VyOfb9sL2+0hyhLVd6FJMsi5Ogneq5NP8jAKzUmekbSqfJlGQFLWddTBexycAC8APgB0og7uooY8LwLYsEPSkvMHnjtki6ww7YEv4n3XwjKbN3rgA9sk5/sClITIeTnKQmQPPC8KUarGPMn+1m+WRxUqkq0sydUzUwSoy3IfMvVN/GD5fVnFLZ2TUclzUSJTx/cAwBCAm0+SaS8paxuoBGCZuTud+8AoPCurm6T4K0BJGP4kwNKsKncHwyKpJOuG478G9+N9jKkBbnlukbuGTF3ln4hJd9dES+ozAAAAAElFTkSuQmCC"/></span>
				<span class="label">Category</span>
			</a>
		</div>
		<div class="sidebar-item {{ $title =='admin' ? 'selected':'' }}">
			<a href="">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABZElEQVRIS+2V0VHDMBBEdyuADgidhA7oAKgAOsDpACogqYASSAl0AFRAqGCZFSeP5choxjP+iz4tad/d3iohFl5cWB8nQNPhWRZJugawIvnUIswFfALYk7ydBZC0AvAIYEdyPxSJ6l8BXHlP0hrADYANSYOLVXQg6TyEH+JUEhkBtgDWJF0EAvAWZ2yZQYd8JwFC+B6AhQ3x+gqhvqo49x0iXdw1yEVcxD2LG/RsECXZR9uRKgrhjqQrLVacfQFwObYj9gzNIBfWGaCWcKZIegdwIGnfq2sMGgL+iOSudjMG/wHgrtbdoIjCkWzRcWsjkCT76svOfz/EKeHe6sEBQzzks/jmjpyiNGRJ1exHZ05RnuGPh0wyhaAWU0M8dK+cdb/cPvtDC0cx3YR4GdNKWlyNK9jGYyqyXwHYOs/v/4c2MVy/iyL7UwmqfW/+FoXHrtDdHFXYgjUBLYHW/gnQcmj5P/1f1LuwypH8THwAAAAASUVORK5CYII="/></span>
				<span class="label">Admin</span>
			</a>
		</div>
		<div class="sidebar-item {{ $title =='gallery' ? 'selected':'' }}">
			<a href="">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABV0lEQVRIS92V4TXEUBCFv1sBKrAdUMLqQCpABajAbgWoABWgAnSwKrBbgd0KxpmcFyJ5kTkRf8zPZDLfe3fuTERHmNkxcAFMunJ6ni+BQrkkM9sG3gcWrn+27AJMgacRAPwTgJl5I3eBjaSFmY0nUXLLTdL7RdJ0bMAa2PpLgNXc8tMNCsC9/Vw7UK/RZGYRwEpSOXBmdgjc91ZOCVHAnSSf7DLM7BY4qkFegQfgrHm7KKCQ5AUqgE+6S7UHXAMzSeucOUIASa2BTOtk4rauy2VmV8Bp9SwCeJTkuocigR3qc0UEMJc0C1X/ktB7cRkF+Jx8kyEAc8eVruu6gb98CxTqS9k0AVQNzVixr1ju/UkLAHxqnpbg0D/awq2bA/hJ3NfzIUduftMFqPJ8mKJx3pyJXJOjxXJ5B5JaB/Ib+IYsh+KXseOa5yTaB3x5+V4ZEqvUM6/Rig/a7t00VJJz/AAAAABJRU5ErkJggg=="/></span>
				<span class="label">Gallery</span>
			</a>
		</div>
		<div class="sidebar-item {{ $title =='table seating' ? 'selected':'' }}">
			<a href="">
				<span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABD0lEQVRIS+2V0U0DMRBE31RAqAA6CB0AFUAJpIOkAqAC6IDQAR0AHSQdhAogFQya0xkdoBNgcvlArOSfk3efvTO3FgOHBq7PJ4DtfWCvEvwkadXNfQewfQDcA6NKwAtwLGlR8t8Ats+Am8rC3bRAZpLm+dgANli8C5oEooGKF9AkAG+gLb0ltgKIKDsD3WKdG8SSzy1gCUx/CbsGxm2N3eKiosMj8ACcA5eSLr4Ds519TQ5wBBw2Fk20Nv0H/KhFd8BVpQYz4PQrDbIhTpp/nIx9grcTOLMsDsoB+0WWFBdUh+248A8Cyri4lZReVoftaHACrCWNyo+WZzJrISmw6mhHT17GVUyy/Ue/+ug9ia9xC6RopmUKlwAAAABJRU5ErkJggg=="/></span>
				<span class="label">Table Seating</span>
			</a>
		</div>
		
	</div>
