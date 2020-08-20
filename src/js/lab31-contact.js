var newWindow;
function makeNewWindow() {
    newWindow = window.open('', '', 'status, height=200, width=300')
}

function subWrite(outerString) {
    if (newWindow.closed) makeNewWindow()
    newWindow.focus()
    newWindow.document.write(outerString)
    newWindow.document.close()
}

$(document).ready(function () {

    function validate() {

        // Check username and password matches
        if ($('#user-name').val() === '') alert('Username cannot be null')
        if ($('#password').val() === '') alert('Password cannot be null')
        if ($('#retype-password').val() === '' || ($('#retype-password').val() !== $('#password').val())) alert('Password doesn\'t matches!')

        // Check contact
        if ($('#contact').val() === '') alert('Contact cannot be null')
        
        // Check age
        if ($('#age').val() === '') alert('Age cannot be null')
        else if ($('#age').val() < 1 || $('#age').val() > 200) alert('Invalid Age')

        // Check phone number
        var phone_regex = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/
        if ($('#phone').val() === '') alert('Phone cannot be null')
        else if (!$('#phone').val().match(phone_regex)) alert('Invalid Phone')

        // Check mail
        var mail_regex = /\S+@\S+\.\S+/
        if ($('#mail').val() === '') alert('Mail cannot be null')
        else if (!mail_regex.test($('#mail').val())) alert('Invalid Mail')
    }

    $(':submit').click(function(e) {
        validate()
        var outerString = 'Ten: '
        outerString += $('#user-name').val() + '<br>'
        outerString += $('#password').val() + '<br>'
        outerString += $('#contact').val() + '<br>'
        outerString += $('#age').val() + '<br>'
        outerString += $('#phone').val() + '<br>'
        outerString += $('#mail').val()

        subWrite(outerString)
        e.preventDefault()
    })

    $(':reset').click(function(e) {
        $('form').reset()
        e.preventDefault()
    })
})