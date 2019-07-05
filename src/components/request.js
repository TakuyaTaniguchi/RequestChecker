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

export class Request extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      title: "",
      textarea: "http://github.com"
    };
  }
  render() {
    return (
      <div>
        <form onSubmit={this.handlesubmit}>
          <textarea className={textarea } value={this.state.textarea} onChange={this.handleChange} ></textarea>
          <input type="submit" value="Request" />
        </form>
      </div>
    );
  }
  handleChange = event => {
    const textarea = event.target.value;
    this.setState({ textarea: textarea });
  };
  handlesubmit = event => {
    event.preventDefault();
    this.props.request(this.state.textarea);
  };
}
