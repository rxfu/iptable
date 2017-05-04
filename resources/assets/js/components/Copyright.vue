<template>
	<md-layout md-gutter>
		<md-layout md-align="center">
			<span id="copyright">
				&copy; {{ copyyear }} <a :href="copylink" target="_blank">{{ copyright }}</a>.
			</span>
		</md-layout>
	</md-layout>
</template>

<script>
	export default {
		props: ['copyyear', 'copyright', 'copylink']
	}
</script>