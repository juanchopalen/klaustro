<template>
	<div>
    	<router-view :user="user"></router-view>
		<foot></foot>
	</div>
</template>
<script>
    export default{
        props: ['user'],
    }
</script>
