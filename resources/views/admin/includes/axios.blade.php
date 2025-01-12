<script>
    function AxiosPost(url, data, callBackFunction) {
        
        axios.post(url, data)
            .then((response) => {
                callBackFunction(response)
            }).catch((error) => {
            callBackFunction(error.response)
        })
    }

    function AxiosUpdate(url, data) {
        axios.post(url, data)
            .then((response) => {
                sweetAlert('success', response.data.message)
            }).catch((error) => {
            sweetAlert(error.status, error.message)
        })
    }

    function AxiosBulkDelete(url, data, callBackFunction) {
        axios.post(url, data)
            .then((response) => {
                callBackFunction(response)
            })
            .catch((error) => {
                callBackFunction(error)
            })
    }

    function AxiosDeleteItem(url, data, callBackFunction) {
        axios.delete(url, data)
            .then((response) => {
                callBackFunction(response)
            })
            .catch((error) => {
                callBackFunction(error)
            })
    }
</script>
