import React, {Component} from 'react';

//import Contacts from './components/contacts';

class App extends Component {
    render() {
        return (
          'wii'
            //<Contacts contacts={this.state.contacts} />
        )
    }

    state = {
        contacts: []
    };

    componentDidMount() {
        fetch('http://localhost/api/orders/1')
            .then(res => res.json())
            .then((data) => {
              console.log(data);
                this.setState({ contacts: data })
            })
            .catch(console.log)
    }
}

export default App;