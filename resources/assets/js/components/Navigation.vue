<template>
	<div>
	    <md-button v-for="item in items" :key="item.href" :href="item.href">{{ item.name }}</md-button>
	</div>
</template>

<script>
	export default {
		props: ['menu'],

		computed: {
			items: function() {
				return JSON.parse(this.menu);
			}
		}
	}
</script>