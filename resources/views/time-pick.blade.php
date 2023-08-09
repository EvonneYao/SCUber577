@extends('layouts.black')

@section('title', 'SCUber557_time-pick')

@section('style-black')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
<link rel="stylesheet" href="{{ asset('css/style_go-or-leave.css') }}">
@endsection

<!-- 返回的上一頁連結設定 -->
@section('back-link', '/go-or-leave')

@section('content-black')

<main>
	<div class="pic">
		<svg width="414" height="233" viewBox="0 0 414 233" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M377.483 160.375C377.483 71.8025 305.681 0 217.108 0C128.535 0 49.9481 71.9536 56.7325 160.375C64.8186 265.764 377.483 245.69 377.483 160.375Z"
				fill="#535AFF"
			/>
			<path
				d="M90.5038 158.346C91.0283 158.299 91.713 158.353 91.8618 158.858C91.8663 159.468 91.0942 159.721 90.4895 159.796C87.2298 160.202 83.9701 160.607 80.7103 161.012C82.2257 162.298 82.3761 164.85 81.0942 166.368C79.8122 167.887 77.3622 168.199 75.6847 167.133C75.1252 166.778 74.6485 166.296 74.0604 165.99C73.4722 165.684 72.6951 165.593 72.1857 166.018C71.0343 166.976 69.298 166.718 67.9202 166.129C66.5546 165.545 65.207 164.549 64.8891 163.099C64.5741 161.661 65.3593 160.212 66.2877 159.07C67.2161 157.929 68.3375 156.895 68.8954 155.533C69.7136 153.535 72.1297 152.54 74.2699 152.823C76.4101 153.105 78.2841 154.408 79.8428 155.902C80.8466 156.863 82.4747 156.486 83.8015 156.071C85.1283 155.657 86.7943 155.35 87.7237 156.384"
				fill="#EDF6FF"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M278.701 152.736C278.701 137.779 289.756 134.333 296.771 134.509C303.786 134.685 310.477 139.201 313.081 145.5C315.685 151.8 314.063 159.52 309.135 164.349C304.208 169.179 293.804 169.238 290.805 168.328C287.806 167.417 278.701 161.084 278.701 152.736Z"
				fill="#EDF6FF"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M295.899 142.397C298.417 142.195 301.003 143.114 302.83 144.858C305.66 147.56 306.391 152.209 304.526 155.65C302.662 159.09 298.369 161.016 294.559 160.121C290.931 159.268 288.025 155.945 287.664 152.235C287.303 148.526 289.513 144.705 292.909 143.168C293.851 142.742 294.868 142.48 295.899 142.397M300.268 144.136C299.377 143.482 298.398 142.933 297.339 142.722C296.133 142.481 294.871 142.692 293.741 143.204C290.868 144.505 288.91 147.874 289.097 151.234C289.284 154.594 291.618 157.695 294.63 158.552C297.642 159.409 301.1 157.939 302.744 155.08C304.388 152.221 304.067 148.201 301.978 145.705C301.475 145.105 300.888 144.592 300.268 144.136V144.136Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M127.441 153.807C127.379 152.832 127.386 151.848 127.558 150.887C127.689 150.158 127.913 149.449 128.136 148.743C128.618 147.221 129.101 145.694 129.76 144.24C132.995 137.113 140.727 132.285 148.551 132.488C156.375 132.691 163.838 137.903 166.743 145.171C169.647 152.439 167.837 161.347 162.341 166.92C156.845 172.492 147.977 174.427 140.652 171.668C133.327 168.909 127.943 161.618 127.441 153.807"
				fill="#EDF6FF"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M148.43 65.7464C148.47 68.8405 147.679 72.1493 149.111 74.8927C151.762 79.9747 159.209 79.0302 164.686 77.3405C160.185 72.2168 155.683 67.0932 151.181 61.9695C160.507 52.4474 169.833 42.9254 179.159 33.4033C179.936 32.6093 180.834 31.7608 181.945 31.7392C183.226 31.7143 184.228 32.7861 185.049 33.7705C188.104 37.4346 191.159 41.0987 194.213 44.7628C196.73 47.7817 199.127 52.6713 196.046 55.1121C207.603 54.3279 219.161 53.5436 230.718 52.7594C228.554 40.3982 232.531 25.1832 236.457 13.2639C236.848 12.0759 237.321 10.7838 238.407 10.1623C239.167 9.72691 240.087 9.70948 240.964 9.70343C262.064 9.55792 283.165 9.4124 304.266 9.26688C305.544 9.25807 306.892 9.26701 307.997 9.91039C308.944 10.4625 309.583 11.4092 310.181 12.3286C328.033 39.7724 339.178 74.2402 342.382 106.822C342.784 110.909 348.022 140.176 342.382 141.044C315.526 145.178 320.79 120.838 292.426 124.399C269.121 127.324 273.524 141.044 260.054 143.717C247.955 146.119 206.684 146.716 193.306 147.386C174.954 148.305 173.657 120.56 145.708 121.688C117.759 122.815 118.399 154.549 103.342 150.916C102.715 150.765 95.8976 146.8 95.744 146.325C93.5251 139.468 91.8615 114.37 91.8615 114.37L86.6056 113.202C86.6056 113.202 86.2195 100.246 86.6056 99.832C87.286 99.1028 99.2002 100.411 104.357 99.832C102.833 89.2536 101.31 78.6753 99.7865 68.0969C99.655 67.1835 99.5414 66.1797 100.038 65.4017C100.59 64.5368 101.698 64.2504 102.703 64.0406C116.139 61.2333 129.813 59.5584 143.53 59.0395C146.622 58.9226 148.39 62.6523 148.43 65.7464Z"
				fill="#EDF6FF"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M121.316 94.607L115.267 95.0378L111.867 62.3147L117.164 61.4438L121.316 94.607Z"
				fill="#FFB61D"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M264.164 32.281C265.802 31.9659 297.226 53.7732 296.901 54.1271C296.575 54.4809 263.516 32.4056 264.164 32.281Z"
				fill="#E7EAEE"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M277.641 32.2808C278.912 32.0545 295.018 42.9436 294.57 43.5779C294.122 44.2123 276.829 32.4254 277.641 32.2808Z"
				fill="#E7EAEE"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M260.795 39.0194C260.184 37.9401 278.208 50.4112 277.724 50.3164C273.08 49.4086 260.974 39.3362 260.795 39.0194Z"
				fill="#E7EAEE"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M258.665 74.2025C259.061 74.5148 258.899 75.2245 258.452 75.4582C258.006 75.692 257.438 75.536 257.043 75.2229C255.854 74.2803 256.101 72.2822 257.142 71.1784C258.183 70.0747 259.727 69.635 261.192 69.2413C261.8 69.078 262.408 68.9147 263.016 68.7514C264.256 68.4182 265.575 68.085 266.805 68.4537C268.036 68.8223 269.061 70.1862 268.583 71.3785C268.282 72.1286 267.488 72.5825 266.693 72.7262C265.898 72.8698 265.082 72.7607 264.276 72.7058C262.692 72.5978 261.094 72.7015 259.538 73.0134C259.233 73.0746 258.911 73.1534 258.692 73.3752C258.474 73.5971 258.421 74.0095 258.665 74.2025Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M266.639 142.171C266.227 143.873 265.815 145.576 265.404 147.278C265.278 147.798 265.139 148.343 264.774 148.735C264.231 149.317 263.353 149.4 262.559 149.446C237.543 150.879 212.508 151.975 187.463 152.734C185.769 152.785 184.174 151.82 183.062 150.541C181.951 149.263 181.244 147.691 180.553 146.145C181.648 145.88 182.685 146.751 183.352 147.659C184.019 148.567 184.606 149.638 185.642 150.08C186.323 150.371 187.094 150.336 187.834 150.296C212.155 148.99 236.476 147.684 260.798 146.378C261.674 146.331 262.625 146.255 263.277 145.666C263.947 145.061 264.107 144.09 264.5 143.277C264.892 142.464 265.856 141.721 266.639 142.171V142.171Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M79.507 156.713C78.3245 155.45 76.8295 154.481 75.1932 153.918C74.0823 153.536 72.8095 153.353 71.7664 153.893C70.7234 154.434 70.1416 155.926 70.8752 156.843C71.2613 157.326 70.3898 157.784 69.7858 157.916C67.9812 158.312 66.6195 160.312 67.131 162.088C67.6424 163.863 70.1255 164.789 71.5578 163.622C72.0765 163.199 72.424 162.582 72.986 162.22C73.548 161.857 74.4951 161.933 74.6678 162.579C75.0321 163.942 76.2744 165.025 77.6738 165.199C78.5877 165.313 79.6691 164.94 79.9523 164.064C80.4541 162.511 78.1642 160.903 78.9439 159.47C79.3371 158.747 80.2882 158.591 81.1078 158.517C84.2398 158.236 87.3718 157.954 90.5038 157.672C91.0283 157.625 91.713 157.679 91.8615 158.185C91.8663 158.794 91.0942 159.047 90.4895 159.122C87.2298 159.528 83.9701 159.933 80.7103 160.338C82.2257 161.624 82.3761 164.176 81.0942 165.695C79.8122 167.213 77.3622 167.525 75.6847 166.459C75.1252 166.104 74.6485 165.622 74.0604 165.316C73.4722 165.01 72.6951 164.92 72.1857 165.344C71.0343 166.303 69.298 166.044 67.9202 165.455C66.5546 164.871 65.207 163.876 64.8891 162.425C64.5741 160.987 65.3593 159.539 66.2877 158.397C67.2161 157.255 68.3375 156.221 68.8954 154.859C69.7136 152.861 72.1297 151.867 74.2699 152.149C76.4101 152.432 78.2841 153.734 79.8428 155.228C80.8466 156.19 82.4747 155.812 83.8015 155.398C85.1283 154.983 86.7943 154.676 87.7237 155.71C85.8105 156.145 83.8973 156.579 81.9841 157.013C81.1327 157.207 80.1037 157.351 79.507 156.713Z"
				fill="#E7EAEE"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M117.812 154.86C117.72 153.424 117.731 151.973 117.985 150.557C118.177 149.482 118.507 148.438 118.836 147.397C119.546 145.154 120.258 142.903 121.23 140.76C125.998 130.255 137.393 123.14 148.925 123.44C160.458 123.739 171.457 131.42 175.738 142.132C180.018 152.845 177.351 165.974 169.25 174.187C161.15 182.401 148.079 185.252 137.283 181.186C126.488 177.12 118.551 166.373 117.812 154.86M123.862 144.114C123.35 145.477 122.95 146.906 122.951 148.362C122.956 152.827 123.308 157.357 124.823 161.556C128.009 170.383 136.596 176.991 145.941 177.845C155.286 178.699 164.912 173.773 169.716 165.712C174.521 157.651 174.282 146.862 169.156 139.002C164.029 131.142 154.275 126.577 144.951 127.641C135.628 128.705 127.165 135.331 123.862 144.114H123.862Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M306.354 127.616C316.13 131.725 322.935 142.07 322.837 152.674C322.739 163.279 315.745 173.496 305.894 177.424C296.044 181.353 283.938 178.752 276.57 171.125C269.202 163.499 267.02 151.31 271.286 141.601C272.294 139.306 273.659 137.113 275.598 135.523C279.994 131.92 284.544 128.238 289.981 126.582C295.318 124.955 301.21 125.454 306.354 127.616M283.614 132.749C282.33 133.569 281.117 134.527 280.168 135.719C279.164 136.98 278.485 138.462 277.816 139.928C276.813 142.126 275.805 144.336 275.179 146.669C273.029 154.686 275.937 163.822 282.297 169.155C288.658 174.489 298.13 175.767 305.696 172.353C313.261 168.938 318.562 161.017 318.879 152.723C319.195 144.428 314.537 136.146 307.308 132.068C300.078 127.991 290.608 128.278 283.614 132.749Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M297.712 18.7789C280.756 19.1399 263.801 19.5008 246.845 19.8618C246.422 19.8708 245.953 19.8987 245.656 20.2006C245.465 20.3956 245.383 20.6705 245.311 20.9342C241.551 34.647 244.597 49.1754 247.152 63.163C248.744 71.8834 250.14 80.6397 251.339 89.423C252.202 95.748 252.964 102.109 252.91 108.492C252.893 110.522 254.32 112.356 256.097 113.337C257.874 114.317 259.953 114.582 261.981 114.681C266.252 114.888 270.554 114.434 274.688 113.339C275.458 113.135 276.256 112.907 277.038 113.054C277.821 113.2 278.574 113.858 278.527 114.653C278.471 115.572 277.477 116.1 276.609 116.409C271.152 118.35 265.161 118.768 259.487 117.601C256.765 117.042 253.926 115.986 252.366 113.686C251.478 112.378 251.099 110.799 250.754 109.257C247.278 93.7336 245.543 77.881 243.848 62.0641C242.308 47.69 240.795 33.2035 242.086 18.805C242.126 18.36 242.175 17.8971 242.411 17.5177C242.917 16.7044 244.036 16.594 244.994 16.5704C262.929 16.13 280.864 15.6896 298.799 15.2491C299.816 15.2242 300.909 15.2205 301.748 15.7957C302.367 16.2202 302.753 16.8997 303.119 17.5554C309.621 29.228 316.123 40.9007 322.625 52.5733C323.926 54.9087 325.269 57.5913 324.459 60.1391C323.859 62.0287 322.148 63.3992 320.29 64.0898C318.431 64.7804 316.416 64.8932 314.436 64.9988C310.883 65.1885 307.329 65.3782 303.775 65.5678C294.997 66.0364 286.218 66.5049 277.439 66.9734C276.935 67.0003 276.372 67.0073 276 66.667C275.456 66.1704 275.691 65.2001 276.271 64.7468C276.851 64.2935 277.631 64.2144 278.364 64.1525C291.612 63.0353 304.86 61.9181 318.108 60.8008C319.146 60.7133 319.867 59.6231 319.913 58.5821C319.96 57.5412 319.509 56.5499 319.066 55.6071C313.326 43.4102 307.111 31.4369 300.44 19.7233C299.939 18.8427 298.725 18.7573 297.712 18.7789V18.7789Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M137.812 135.903C143.737 132.623 151.446 133.007 157.151 136.656C162.855 140.306 166.41 147.001 166.484 153.773C166.561 160.671 162.821 167.737 156.575 170.663C154.397 171.683 151.997 172.191 149.594 172.285C140.838 172.627 132.076 166.869 129.27 158.567C126.464 150.265 130.145 140.146 137.812 135.903M151.337 169.318C153.639 168.934 155.876 168.113 157.834 166.843C159.84 165.541 161.542 163.772 162.764 161.716C165.945 156.365 165.539 149.177 162.007 144.049C158.476 138.922 152.089 135.996 145.875 136.376C143.558 136.517 141.259 137.087 139.188 138.135C132.041 141.75 128.76 151.293 131.784 158.709C134.807 166.125 143.437 170.635 151.337 169.318Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M298.565 168.176C296.048 168.52 293.453 168.275 291.045 167.468C283.41 164.907 278.419 156.175 280.088 148.297C281.757 140.418 289.86 134.46 297.878 135.216C305.896 135.971 312.743 143.338 312.911 151.39C313.078 159.441 306.544 167.087 298.565 168.176M304.327 164.774C309.692 161.518 312.636 154.711 311.335 148.572C310.034 142.433 304.581 137.405 298.358 136.605C292.134 135.805 285.586 139.291 282.775 144.901C279.964 150.511 281.091 157.842 285.458 162.349C290.223 167.266 298.474 168.327 304.327 164.774Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M146.979 143.745C149.497 143.543 152.083 144.462 153.91 146.206C156.74 148.908 157.471 153.557 155.606 156.997C153.742 160.438 149.449 162.364 145.639 161.469C142.011 160.616 139.105 157.293 138.744 153.583C138.383 149.874 140.593 146.053 143.989 144.516C144.932 144.09 145.948 143.828 146.979 143.745M151.348 146.579C150.457 145.973 149.478 145.466 148.419 145.27C147.213 145.047 145.951 145.243 144.821 145.716C141.948 146.92 139.99 150.038 140.177 153.147C140.364 156.256 142.698 159.125 145.71 159.918C148.722 160.711 152.18 159.351 153.824 156.705C155.468 154.06 155.147 150.34 153.058 148.031C152.555 147.475 151.968 147 151.348 146.579V146.579Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M148.43 61.7034C148.47 64.7975 147.68 68.1063 149.111 70.8496C151.763 75.9316 159.209 74.9871 164.686 73.2974C160.185 68.1738 155.683 63.0501 151.181 57.9265C160.507 48.4044 169.833 38.8823 179.159 29.3602C179.936 28.5663 180.834 27.7178 181.945 27.6962C183.227 27.6712 184.229 28.7431 185.049 29.7275C188.104 33.3916 191.159 37.0557 194.213 40.7198C196.73 43.7386 199.127 48.6283 196.046 51.0691C207.603 50.2848 219.161 49.5006 230.718 48.7163C228.554 36.3552 232.531 23.8355 236.457 11.9163C236.848 10.7283 237.321 9.43618 238.407 8.81463C239.167 8.37926 240.088 8.36182 240.964 8.35578C262.065 8.21026 283.165 8.06474 304.266 7.91923C305.544 7.91041 306.893 7.91936 307.997 8.56273C308.945 9.11481 309.583 10.0615 310.181 10.9809C328.033 38.4248 339.178 70.1971 342.382 102.779C342.784 106.866 343.224 111.331 346.109 114.254C350.5 118.704 350.973 126.457 347.154 131.407C349.963 133.445 349.269 138.15 346.698 140.479C344.126 142.809 340.471 143.404 337.037 143.899C332.48 144.557 327.522 145.143 323.538 142.836C330.063 141.306 336.597 139.813 343.139 138.356C340.237 119.247 337.335 100.137 334.433 81.0273C333.477 74.7255 332.515 68.4018 330.731 62.2826C328.81 55.6932 325.959 49.4191 323.117 43.1712C318.642 33.331 314.167 23.4908 309.692 13.6505C309.204 12.5784 308.675 11.4554 307.714 10.7751C306.55 9.95116 305.013 9.95311 303.587 9.98705C283.722 10.4599 263.858 10.9328 243.993 11.4057C242.848 11.433 241.613 11.4907 240.714 12.1998C239.973 12.7832 239.598 13.7041 239.274 14.5891C231.452 35.9625 236.034 59.6393 240.699 81.916C241.556 86.0085 235.996 88.0992 231.831 88.4644C184.278 92.6333 136.725 96.8022 89.1717 100.971C88.5882 104.741 88.4237 108.576 88.682 112.382C91.8468 112.661 95.0117 112.939 98.1765 113.217C97.1727 113.612 96.1689 114.007 95.1651 114.403C97.0364 124.237 98.0708 134.231 98.2535 144.24C98.3091 147.287 100.949 149.793 103.858 150.701C106.766 151.609 109.898 151.271 112.925 150.925C109.703 152.274 106.345 153.648 102.856 153.477C99.3673 153.306 95.7142 151.106 95.0702 147.673C93.051 136.907 91.8882 125.981 91.5964 115.031C89.7628 115.076 87.9292 115.12 86.0956 115.165C85.4758 110.583 85.2262 105.951 85.3502 101.329C85.3769 100.334 85.4575 99.2478 86.1363 98.5202C86.8167 97.7911 87.8967 97.637 88.8878 97.5257C94.0441 96.9468 99.2004 96.3679 104.357 95.789C102.833 85.2106 101.31 74.6322 99.7867 64.0539C99.6551 63.1404 99.5415 62.1366 100.038 61.3587C100.59 60.4938 101.698 60.2074 102.703 59.9976C116.14 57.1903 129.813 55.5154 143.53 54.9965C146.622 54.8795 148.39 58.6093 148.43 61.7034ZM106.302 94.7212C106.336 95.0211 106.388 95.3536 106.624 95.5412C106.854 95.7236 107.179 95.7049 107.472 95.6771C120.963 94.3961 134.455 93.115 147.946 91.8339C148.319 91.7985 148.743 91.7334 148.946 91.4194C149.106 91.1731 149.073 90.8539 149.034 90.5631C147.655 80.2112 146.276 69.8593 144.898 59.5075C144.86 59.2231 144.814 58.9199 144.621 58.7072C144.363 58.4213 143.932 58.3916 143.546 58.3832C130.215 58.0915 116.849 59.4496 103.85 62.4168C103.496 62.4975 103.108 62.6019 102.906 62.9033C102.717 63.1857 102.748 63.5562 102.786 63.8941C103.958 74.1698 105.13 84.4455 106.302 94.7212ZM231.825 53.3369C231.768 52.857 231.667 52.309 231.25 52.0644C230.985 51.9085 230.656 51.9212 230.349 51.9386C218.337 52.6167 206.325 53.2949 194.314 53.973C194.049 53.988 193.764 54.0111 193.563 54.1849C193.271 54.4384 193.288 54.8886 193.329 55.2732C194.428 65.6438 195.528 76.0145 196.627 86.3852C196.662 86.7117 196.709 87.0656 196.941 87.2975C197.24 87.5956 197.721 87.5774 198.141 87.5388C210.604 86.3962 223.067 85.2537 235.53 84.1111C234.295 73.8531 233.06 63.595 231.825 53.3369ZM167.303 70.8101C167.479 70.9693 167.67 71.1362 167.905 71.1638C168.237 71.2029 168.527 70.9556 168.77 70.7251C176.889 63.0082 186.357 56.6389 194.476 48.922C194.842 48.5744 195.236 48.162 195.219 47.6578C195.208 47.3199 195.01 47.0205 194.818 46.7418C191.582 42.0326 186.794 36.1158 183.163 31.7039C182.806 31.2705 182.346 30.7955 181.789 30.8662C181.434 30.9113 181.15 31.1726 180.893 31.421C171.924 40.0616 162.955 48.7023 153.986 57.3429C153.786 57.5353 153.572 57.7611 153.575 58.0384C153.579 58.3162 153.8 58.5363 154.006 58.7232C158.439 62.7522 162.871 66.7811 167.303 70.8101ZM193.257 75.0525C193.188 74.6077 193.09 74.1141 192.722 73.8542C192.396 73.6235 191.959 73.6518 191.562 73.6897C179.146 74.8718 166.73 76.054 154.314 77.2361C153.665 77.2979 152.905 77.4336 152.622 78.0211C152.467 78.3446 152.505 78.7234 152.547 79.0798C152.966 82.6253 153.385 86.1707 153.804 89.7161C153.863 90.2159 153.959 90.7782 154.375 91.0615C154.707 91.2881 155.145 91.2622 155.546 91.2274C168.387 90.1137 181.228 89 194.068 87.8863C194.388 87.8586 194.745 87.8121 194.946 87.5618C195.153 87.304 195.113 86.9336 195.062 86.6069C194.46 82.7554 193.859 78.9039 193.257 75.0525ZM190.677 56.5368C190.648 56.3217 190.548 56.0451 190.331 56.062C190.24 56.0692 190.164 56.1326 190.094 56.1931C183.707 61.7731 177.321 67.3531 170.934 72.9332C177.575 72.3764 184.209 71.7433 190.836 71.0341C191.405 70.9731 192.063 70.8553 192.335 70.3516C192.513 70.0228 192.467 69.6233 192.416 69.2529C191.837 65.0142 191.257 60.7755 190.677 56.5368ZM344.809 116.285C345.421 119.815 346.033 123.345 346.645 126.875C346.705 127.226 346.83 127.647 347.178 127.724C347.742 127.848 347.937 126.999 347.859 126.427C347.445 123.372 347.032 120.317 346.618 117.262C346.544 116.715 346.436 116.109 345.994 115.779C345.552 115.448 344.714 115.741 344.809 116.285Z"
				fill="#00160A"
			/>
			<path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M41.0889 186.27C29.2899 186.457 -11.2856 189.463 -11.9866 187.958C-12.8833 186.032 31.364 183.499 41.0089 183.347L44.03 183.306C52.7995 183.211 41.0889 186.27 41.0889 186.27ZM131.209 182.584C134.074 182.584 136.317 183.511 134.388 184.189C132.459 184.866 126.217 186.292 115.765 186.532C105.313 186.773 93.1973 187.021 75.2949 187.374C74.2569 187.394 73.3988 186.569 73.3783 185.531C73.3579 184.493 74.1829 183.635 75.2209 183.615L106.922 182.969C116.546 182.76 122.57 182.584 131.209 182.584ZM274.403 181.483C275.441 181.467 276.296 182.295 276.312 183.333C276.329 184.371 275.501 185.226 274.462 185.243L270.057 185.297L256.578 185.39C253.866 185.418 144.123 186.119 142.635 184.51C141.147 182.901 143.43 182.61 144.468 182.584C144.468 182.584 256.543 181.626 259.473 181.605L270.682 181.531C271.985 181.518 273.164 181.503 274.403 181.483ZM396.242 177.867C396.242 177.867 399.617 177.284 424.26 179.129C425.296 179.207 426.072 180.109 425.995 181.144C425.917 182.179 413.731 181.656 397.072 181.627L392.491 181.635C380.258 181.689 368.894 182.02 350.034 182.796L326.23 183.802C316.071 184.218 310.011 184.421 302.641 184.594C301.603 184.619 300.742 183.797 300.717 182.759C300.693 181.721 301.515 180.86 302.553 180.835L308.471 180.681C315.51 180.477 322.745 180.194 335.57 179.646L349.171 179.069C370.437 178.189 382.262 177.867 396.242 177.867Z"
				fill="#00160A"
			/>
		</svg>
	</div>
	<h4>選擇時間</h4>

	<div class="btn-group">
			<input type="text" id="time-start" name="time_start" class="button timepicker" placeholder="開始接單時間(預設:now)">
			<input type="text" id="time-end" name="time_end" class="button timepicker" placeholder="接單結束時間(預設:15mins)">
			<input class="button" type="button" value="下一步" onclick="location.href='{{url('/destination')}}'" />
	</div>
</main>
@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		var timeStart = document.getElementById('time-start');
		var timeEnd = document.getElementById('time-end');
		// 取得目前時間
		var now = new Date();
		var currentHour = now.getHours();
		var currentMinute = now.getMinutes();

		// 格式化時間，確保是兩位數
		var formattedHour = currentHour.toString().padStart(2, '0');
		var formattedMinute = currentMinute.toString().padStart(2, '0');

		// 預設值為目前時間
		var defaultStartTime = formattedHour + ':' + formattedMinute;

		// 將目前時間加上15分鐘，注意處理超過60分鐘的情況
		var nextHour = currentHour;
		var nextMinute = currentMinute + 15;
		if (nextMinute >= 60) {
			nextHour += 1;
			nextMinute -= 60;
		}
		var formattedNextHour = nextHour.toString().padStart(2, '0');
		var formattedNextMinute = nextMinute.toString().padStart(2, '0');
		var defaultEndTime = formattedNextHour + ':' + formattedNextMinute;

		// 初始化Time picker，並設定不同的預設值
		var options_start = {
			twelveHour: false,
			defaultTime: defaultStartTime,
			showClearBtn: true,
			autoClose: true,
			i18n: { cancel: '取消', clear: '重置', done: 'OK' },
		};
		var options_end = {
			twelveHour: false,
			defaultTime: defaultEndTime,
			showClearBtn: true,
			autoClose: true,
			i18n: { cancel: '取消', clear: '重置', done: 'OK' },
		};
		var instance_start = M.Timepicker.init(timeStart, options_start);
		var instance_end = M.Timepicker.init(timeEnd, options_end);
	});
</script>
@endsection
