import React from "react";
import { css } from "emotion";



const form = css({
  display: "flex",
  justifyContent: "space-around"
})
const pinkl = css({
  color: "hotpink"
})
const input = css({
  color: "skyblue",
  fontSize: "16px",
  border: "solid 1px",
  backgroundColor: "black",
  cursor: "pointer",
  ':hover': pinkl
});


const textarea = css({
  width: "500px",
  height: "250px"
})

export class Search extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      title: ""
    };
  }
  render() {
    return (
      <div>
        <form onSubmit={this.handlesubmit} className={form}>
          <textarea className={textarea } defaultValue=" URLを入力してください。複数登録する場合は改行してください。"></textarea>
          <input className={input} onClick={this.handleChange} type="submit" value="Request" />
        </form>
      </div>
    );
  }
  handleChange = event => {
    const title = event.target.value;
    this.setState({ title: title });
  };
  handlesubmit = event => {
    event.preventDefault();
    this.props.search(this.state.title);
    this.setState({ title: "" });
  };
}
